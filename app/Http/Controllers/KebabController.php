<?php

namespace App\Http\Controllers;

use App\Models\Kebab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\KebabDetail;
use Illuminate\Support\Facades\DB;

class KebabController extends Controller
{
    // Show all
    public function showAllKebab()
    {
        $kebabs = Kebab::all();

        return response()->json([
            'status' => true,
            'message' => 'List of Kebabs',
            'data' => $kebabs
        ], 200);
    }

    // Show by id
    public function showKebab($id)
    {
        $kebab = Kebab::find($id);

        if (!$kebab) {
            return response()->json([
                'status' => false,
                'message' => 'Kebab not found'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'Kebab details',
            'data' => $kebab
        ], 200);
    }

    // Add new
    public function addKebab(Request $request)
    {
        if (Auth::user()->role !== 1) {
            return response()->json([
                'status' => false,
                'message' => 'Unauthorized access'
            ], 403);
        }

        $request->validate([
            // Fields for kebab table
            'name' => 'required|string|max:255',
            'logo' => 'nullable|string',
            'address' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'year_opened' => 'required|integer',
            'year_closed' => 'nullable|integer',

            // Fields for kebab_details table
            'opening_hours' => 'required|json',
            'meat_types' => 'required|json',
            'sauces' => 'required|json',
            'status' => 'nullable|string',
            'is_craft' => 'boolean',
            'is_in_stall' => 'boolean',
            'is_chain_member' => 'boolean',
            'ordering_options' => 'required|json',
        ]);

        DB::beginTransaction();

        try {
            // Insert data into kebab table
            $kebab = Kebab::create($request->only([
                'name',
                'logo',
                'address',
                'latitude',
                'longitude',
                'year_opened',
                'year_closed',
            ]));

            // Insert data into kebab_details table
            $kebabDetails = KebabDetail::create([
                'kebab_id' => $kebab->id,
                'opening_hours' => $request->opening_hours,
                'meat_types' => $request->meat_types,
                'sauces' => $request->sauces,
                'status' => $request->status,
                'is_craft' => $request->is_craft,
                'is_in_stall' => $request->is_in_stall,
                'is_chain_member' => $request->is_chain_member,
                'ordering_options' => $request->ordering_options,
            ]);

            DB::commit();

            return response()->json([
                'status' => true,
                'message' => 'Kebab created successfully',
                'data' => [
                    'kebab' => $kebab,
                    'kebab_details' => $kebabDetails,
                ]
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'status' => false,
                'message' => 'Failed to create kebab',
                'error' => $e->getMessage(),
            ], 500);
        }
    }


    // Update
    public function updateKebab(Request $request, $id)
    {
        if (Auth::user()->role !== 1) {
            return response()->json([
                'status' => false,
                'message' => 'Unauthorized access'
            ], 403);
        }

        $kebab = Kebab::find($id);

        if (!$kebab) {
            return response()->json([
                'status' => false,
                'message' => 'Kebab not found'
            ], 404);
        }

        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'logo' => 'nullable|string',
            'address' => 'sometimes|required|string',
            'latitude' => 'sometimes|required|numeric',
            'longitude' => 'sometimes|required|numeric',
            'year_opened' => 'sometimes|required|integer',
            'year_closed' => 'sometimes|integer',
            'opening_hours' => 'sometimes|required|json',
            'meat_types' => 'sometimes|required|json',
            'sauces' => 'sometimes|required|json',
            'status' => 'nullable|string',
            'is_craft' => 'boolean',
            'is_in_stall' => 'boolean',
            'is_chain_member' => 'boolean',
            'ordering_options' => 'sometimes|required|json',
        ]);

        DB::beginTransaction();

        try {
            // Update kebab table
            $kebab->update($request->only([
                'name',
                'logo',
                'address',
                'latitude',
                'longitude',
                'year_opened',
                'year_closed',
            ]));

            // Update kebab_details table
            $kebabDetails = KebabDetail::where('kebab_id', $id)->first();

            if ($kebabDetails) {
                $kebabDetails->update($request->only([
                    'opening_hours',
                    'meat_types',
                    'sauces',
                    'status',
                    'is_craft',
                    'is_in_stall',
                    'is_chain_member',
                    'ordering_options',
                ]));
            }

            DB::commit();

            return response()->json([
                'status' => true,
                'message' => 'Kebab updated successfully',
                'data' => [
                    'kebab' => $kebab,
                    'kebab_details' => $kebabDetails,
                ]
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'status' => false,
                'message' => 'Failed to update kebab',
                'error' => $e->getMessage(),
            ], 500);
        }
    }


    // Delete
    public function delKebab($id)
    {
        if (Auth::user()->role !== 1) {
            return response()->json([
                'status' => false,
                'message' => 'Unauthorized access'
            ], 403);
        }

        $kebab = Kebab::find($id);

        if (!$kebab) {
            return response()->json([
                'status' => false,
                'message' => 'Kebab not found'
            ], 404);
        }

        $kebab->delete();

        return response()->json([
            'status' => true,
            'message' => 'Kebab deleted successfully',
            'data' => null
        ], 200);
    }

    // SHOW DETAIL ON SPECIFIC KEBAB
    public function showKebabDetails($kebabId)
    {

        $kebabDetails = KebabDetail::where('kebab_id', $kebabId)->first();

        if (!$kebabDetails) {
            return response()->json([
                'status' => false,
                'message' => 'Kebab details not found'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'Kebab details retrieved successfully',
            'data' => $kebabDetails
        ], 200);
    }

    public function filterKebab(Request $request)
    {
        $query = DB::table('kebab')
            ->join('kebab_details', 'kebab.id', '=', 'kebab_details.kebab_id')
            ->select('kebab.*', 'kebab_details.*');

        $array = [
            'opening_hours' => $request->query('opening_hours', null),
            'sauces' => $request->query('sauces', null),
            'meat_types' => $request->query('meat_types', null),
            'status' => strtoupper($request->query('status', null)),
            'is_craft' => $request->query('is_craft', null),
            'is_in_stall' => $request->query('is_in_stall', null),
            'is_chain_member' => $request->query('is_chain_member', null),
            'ordering_options' => $request->query('ordering_options', null),
        ];

        if ($array['opening_hours']) {
            $hour = $array['opening_hours'];

            $query->where(function ($subQuery) use ($hour) {
                $subQuery->whereRaw("JSON_EXTRACT(opening_hours, '$.monday') LIKE ? OR
                                  JSON_EXTRACT(opening_hours, '$.tuesday') LIKE ? OR
                                  JSON_EXTRACT(opening_hours, '$.wednesday') LIKE ? OR
                                  JSON_EXTRACT(opening_hours, '$.thursday') LIKE ? OR
                                  JSON_EXTRACT(opening_hours, '$.friday') LIKE ? OR
                                  JSON_EXTRACT(opening_hours, '$.saturday') LIKE ? OR
                                  JSON_EXTRACT(opening_hours, '$.sunday') LIKE ?",
                    [
                        "%$hour%",
                        "%$hour%",
                        "%$hour%",
                        "%$hour%",
                        "%$hour%",
                        "%$hour%",
                        "%$hour%"
                    ]);
            });
        }

        foreach ($array as $key => $value) {
            if ($value && $key !== 'opening_hours') {
                if (in_array($key, ['sauces', 'meat_types', 'ordering_options'])) {
                    $explodeValue = explode(',', $value);
                    foreach ($explodeValue as $values) {
                        $query->whereJsonContains($key, $values);
                    }
                } elseif (in_array($key, ['is_craft', 'is_in_stall', 'is_chain_member'])) {
                    $toBoolean = filter_var($value, FILTER_VALIDATE_BOOL);
                    $query->where($key, '=', $toBoolean);
                } else {
                    $query->where($key, '=', $value);
                }
            }
        }

        $kebabs = $query->get();

        if ($kebabs->isEmpty()) {
            return response()->json([
                'message' => 'Not found kebabs with this filters, try again',
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'Kebabs filtered successfully',
            'data' => $kebabs,
        ]);
    }


}
