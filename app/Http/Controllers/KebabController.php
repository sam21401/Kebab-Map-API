<?php

namespace App\Http\Controllers;

use App\Models\Kebab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\KebabDetail;
use App\Models\Favorite;
use Illuminate\Support\Facades\DB;

/**
 * @group Kebab management
 *
 * APIs for managing kebab and kebab details
 */
class KebabController extends Controller
{
    /**
     * Show all kebabs.
     *
     * This endpoint retrieves and displays a list of all kebabs available in the database, including their names,
     * logos, addresses, geographical coordinates (latitude and longitude), and the years they were opened and closed.
     *
     * @response 200 {
     *   "status": true,
     *   "message": "List of Kebabs",
     *   "data": [
     *     {
     *       "id": 1,
     *       "name": "Chicken Kebab",
     *       "logo": "http://example.com/logos/chicken-kebab.png",
     *       "address": "123 Kebab St, Food Town",
     *       "latitude": 40.7128,
     *       "longitude": -74.0060,
     *       "year_opened": 2020,
     *       "year_closed": null,
     *       "created_at": "2025-01-16T12:00:00.000000Z",
     *       "updated_at": "2025-01-16T12:00:00.000000Z"
     *     },
     *     {
     *       "id": 2,
     *       "name": "Beef Kebab",
     *       "logo": null,
     *       "address": "456 Kebab Rd, Food City",
     *       "latitude": 34.0522,
     *       "longitude": -118.2437,
     *       "year_opened": 2019,
     *       "year_closed": null,
     *       "created_at": "2025-01-16T12:00:00.000000Z",
     *       "updated_at": "2025-01-16T12:00:00.000000Z"
     *     }
     *     // Additional kebabs...
     *   ]
     * }
     */

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

    /**
     * Show a kebab by ID.
     *
     * This endpoint retrieves and displays the details of a specific kebab by its ID.
     * The details include the kebab's name, logo, address, geographical coordinates
     * (latitude and longitude), and the years it was opened and closed.
     * If the kebab with the specified ID does not exist, an error message is returned.
     *
     * @urlParam id int required The ID of the kebab to retrieve. Example: 1
     *
     * @response 200 {
     *   "status": true,
     *   "message": "Kebab details",
     *   "data": {
     *     "id": 1,
     *     "name": "Chicken Kebab",
     *     "logo": "http://example.com/logos/chicken-kebab.png",
     *     "address": "123 Kebab St, Food Town",
     *     "latitude": 40.7128,
     *     "longitude": -74.0060,
     *     "year_opened": 2020,
     *     "year_closed": null,
     *     "created_at": "2025-01-16T12:00:00.000000Z",
     *     "updated_at": "2025-01-16T12:00:00.000000Z"
     *   }
     * }
     * @response 404 {
     *   "status": false,
     *   "message": "Kebab not found"
     * }
     */

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

    /**
     * Add a new kebab along with its details.
     *
     * This endpoint allows an admin user to create a new kebab entry, including its basic information
     * and associated details. The request requires authentication and authorization to ensure only admins
     * can perform this action. The function validates the request data, inserts the kebab information
     * into the `kebab` table, and its details into the `kebab_details` table within a database transaction
     * to maintain data integrity. In case of a validation error or any exception during the database operations,
     * appropriate error messages are returned.
     *
     * @urlParam name string required The name of the kebab. Example: "Delicious Kebab"
     * @urlParam logo string optional The logo URL of the kebab. Example: "http://example.com/logo.png"
     * @urlParam address string required The address of the kebab location. Example: "123 Kebab St."
     * @urlParam latitude float required The latitude coordinate of the kebab location. Example: 40.7128
     * @urlParam longitude float required The longitude coordinate of the kebab location. Example: -74.0060
     * @urlParam year_opened int required The year the kebab establishment was opened. Example: 2020
     * @urlParam year_closed int optional The year the kebab establishment was closed, if applicable. Example: 2022
     * @urlParam opening_hours json required The opening hours of the kebab in JSON format. Example: {"Monday": "10:00 - 22:00", "Tuesday": "10:00 - 22:00"}
     * @urlParam meat_types json required The types of meat available in JSON format. Example: ["Chicken", "Beef"]
     * @urlParam sauces json required The available sauces in JSON format. Example: ["Garlic Sauce", "Hot Sauce"]
     * @urlParam status string optional The status of the kebab establishment. Example: "Open"
     * @urlParam is_craft boolean optional Indicates if the kebab is crafted. Example: true
     * @urlParam is_in_stall boolean optional Indicates if the kebab is available in a stall. Example: false
     * @urlParam is_chain_member boolean optional Indicates if the kebab is a member of a chain. Example: true
     * @urlParam ordering_options json required The ordering options available in JSON format. Example: ["Takeout", "Dine-in"]
     *
     * @response 201 {
     *   "status": true,
     *   "message": "Kebab created successfully",
     *   "data": {
     *     "kebab": {
     *       "id": 1,
     *       "name": "Delicious Kebab",
     *       "logo": "http://example.com/logo.png",
     *       "address": "123 Kebab St.",
     *       "latitude": 40.7128,
     *       "longitude": -74.0060,
     *       "year_opened": 2020,
     *       "year_closed": null,
     *       "created_at": "2025-01-16T12:00:00.000000Z",
     *       "updated_at": "2025-01-16T12:00:00.000000Z"
     *     },
     *     "kebab_details": {
     *       "id": 1,
     *       "kebab_id": 1,
     *       "opening_hours": {"Monday": "10:00 - 22:00", "Tuesday": "10:00 - 22:00"},
     *       "meat_types": ["Chicken", "Beef"],
     *       "sauces": ["Garlic Sauce", "Hot Sauce"],
     *       "status": "Open",
     *       "is_craft": true,
     *       "is_in_stall": false,
     *       "is_chain_member": true,
     *       "ordering_options": ["Takeout", "Dine-in"],
     *       "created_at": "2025-01-16T12:00:00.000000Z",
     *       "updated_at": "2025-01-16T12:00:00.000000Z"
     *     }
     *   }
     * }
     * @response 403 {
     *   "status": false,
     *   "message": "Unauthorized access"
     * }
     * @response 500 {
     *   "status": false,
     *   "message": "Failed to create kebab",
     *   "error": "Error message here"
     * }
     * @authenticated
     */

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

    /**
     * Update an existing kebab and its details.
     *
     * This endpoint allows an admin user to update the information of an existing kebab along with its
     * associated details. The request requires authentication and authorization to ensure only admins
     * can perform this action. The function first checks if the kebab with the given ID exists. If it does,
     * it validates the incoming data, updates the kebab information in the `kebab` table, and updates its
     * details in the `kebab_details` table within a database transaction to maintain data integrity.
     * In case of a validation error or any exception during the database operations, appropriate error
     * messages are returned.
     *
     * @urlParam id int required The ID of the kebab to update. Example: 1
     * @urlParam name string optional The name of the kebab. Example: "Updated Kebab"
     * @urlParam logo string optional The logo URL of the kebab. Example: "http://example.com/updated_logo.png"
     * @urlParam address string optional The address of the kebab location. Example: "456 Updated Kebab St."
     * @urlParam latitude float optional The latitude coordinate of the kebab location. Example: 40.7129
     * @urlParam longitude float optional The longitude coordinate of the kebab location. Example: -74.0061
     * @urlParam year_opened int optional The year the kebab establishment was opened. Example: 2021
     * @urlParam year_closed int optional The year the kebab establishment was closed, if applicable. Example: 2023
     * @urlParam opening_hours json optional The opening hours of the kebab in JSON format. Example: {"Monday": "11:00 - 21:00"}
     * @urlParam meat_types json optional The types of meat available in JSON format. Example: ["Lamb", "Beef"]
     * @urlParam sauces json optional The available sauces in JSON format. Example: ["Tzatziki", "Chili Sauce"]
     * @urlParam status string optional The status of the kebab establishment. Example: "Open"
     * @urlParam is_craft boolean optional Indicates if the kebab is crafted. Example: true
     * @urlParam is_in_stall boolean optional Indicates if the kebab is available in a stall. Example: false
     * @urlParam is_chain_member boolean optional Indicates if the kebab is a member of a chain. Example: true
     * @urlParam ordering_options json optional The ordering options available in JSON format. Example: ["Takeout", "Delivery"]
     *
     * @response 200 {
     *   "status": true,
     *   "message": "Kebab updated successfully",
     *   "data": {
     *     "kebab": {
     *       "id": 1,
     *       "name": "Updated Kebab",
     *       "logo": "http://example.com/updated_logo.png",
     *       "address": "456 Updated Kebab St.",
     *       "latitude": 40.7129,
     *       "longitude": -74.0061,
     *       "year_opened": 2021,
     *       "year_closed": null,
     *       "created_at": "2025-01-16T12:00:00.000000Z",
     *       "updated_at": "2025-01-16T12:00:00.000000Z"
     *     },
     *     "kebab_details": {
     *       "id": 1,
     *       "kebab_id": 1,
     *       "opening_hours": {"Monday": "11:00 - 21:00"},
     *       "meat_types": ["Lamb", "Beef"],
     *       "sauces": ["Tzatziki", "Chili Sauce"],
     *       "status": "Open",
     *       "is_craft": true,
     *       "is_in_stall": false,
     *       "is_chain_member": true,
     *       "ordering_options": ["Takeout", "Delivery"],
     *       "created_at": "2025-01-16T12:00:00.000000Z",
     *       "updated_at": "2025-01-16T12:00:00.000000Z"
     *     }
     *   }
     * }
     * @response 403 {
     *   "status": false,
     *   "message": "Unauthorized access"
     * }
     * @response 404 {
     *   "status": false,
     *   "message": "Kebab not found"
     * }
     * @response 500 {
     *   "status": false,
     *   "message": "Failed to update kebab",
     *   "error": "Error message here"
     * }
     * @authenticated
     */

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

    /**
     * Delete an existing kebab.
     *
     * This endpoint allows an admin user to delete a kebab from the system.
     * The request requires authentication and authorization to ensure that only
     * admins can perform this action. The function first checks if the kebab
     * with the given ID exists. If it does, it proceeds to delete the kebab from
     * the `kebab` table. If the kebab is successfully deleted, a confirmation
     * message is returned. In case of an unauthorized access attempt or if the
     * kebab is not found, appropriate error messages are returned.
     *
     * @urlParam id int required The ID of the kebab to delete. Example: 1
     *
     * @response 200 {
     *   "status": true,
     *   "message": "Kebab deleted successfully",
     *   "data": null
     * }
     * @response 403 {
     *   "status": false,
     *   "message": "Unauthorized access"
     * }
     * @response 404 {
     *   "status": false,
     *   "message": "Kebab not found"
     * }
     * @authenticated
     */

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

    /**
     * Retrieve details of a specific kebab.
     *
     * This endpoint retrieves detailed information about a kebab identified by
     * its unique ID. It queries the `kebab_details` table to find the details
     * associated with the specified kebab ID. If the details are found, they
     * are returned in the response. If no details are found for the given kebab
     * ID, an appropriate error message is returned.
     *
     * @urlParam kebabId int required The ID of the kebab whose details are to be retrieved. Example: 1
     *
     * @response 200 {
     *   "status": true,
     *   "message": "Kebab details retrieved successfully",
     *   "data": {
     *     // Kebab detail fields here (e.g., opening_hours, meat_types, sauces, etc.)
     *   }
     * }
     * @response 404 {
     *   "status": false,
     *   "message": "Kebab details not found"
     * }
     */

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

    /**
     * Filter kebabs based on various criteria.
     *
     * This endpoint allows users to filter kebabs based on specified criteria,
     * including opening hours, sauces, meat types, status, and other attributes.
     * The function constructs a query to retrieve kebabs from the database that
     * match the provided filters. If no kebabs are found matching the criteria,
     * an appropriate message is returned.
     *
     * @queryParam opening_hours string optional The opening hours to filter kebabs. Example: "10:00"
     * @queryParam sauces string optional A comma-separated list of sauces to filter kebabs. Example: "ketchup,mustard"
     * @queryParam meat_types string optional A comma-separated list of meat types to filter kebabs. Example: "beef,chicken"
     * @queryParam status string optional The status of the kebabs (e.g., "OPEN", "CLOSED"). Example: "OPEN"
     * @queryParam is_craft boolean optional Filter for craft kebabs. Example: true
     * @queryParam is_in_stall boolean optional Filter for kebabs that are in a stall. Example: false
     * @queryParam is_chain_member boolean optional Filter for kebabs that are chain members. Example: true
     * @queryParam ordering_options string optional A comma-separated list of ordering options. Example: "takeout,dine-in"
     *
     * @response 200 {
     *   "status": true,
     *   "message": "Kebabs filtered successfully",
     *   "data": [
     *     // Array of filtered kebab objects
     *   ]
     * }
     * @response 404 {
     *   "message": "Not found kebabs with this filters, try again"
     * }
     */

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

    /**
     * Add a kebab to the user's favorites.
     *
     * This endpoint allows authenticated users to add a specified kebab to their favorites.
     * If the kebab is already in the user's favorites, an appropriate message is returned.
     *
     * @param Request $request The request object containing the user's session information.
     * @param int $kebabId The ID of the kebab to be added to favorites.
     *
     * @response 201 {
     *   "status": true,
     *   "message": "Kebab added to favorites successfully"
     * }
     * @response 403 {
     *   "status": false,
     *   "message": "Unauthorized access"
     * }
     * @response 404 {
     *   "status": false,
     *   "message": "Kebab not found"
     * }
     * @response 409 {
     *   "status": false,
     *   "message": "Kebab already in favorites"
     * }
     * @authenticated
     */

    public function addToFavorites(Request $request, $kebabId)
    {
        if (!Auth::check()) {
            return response()->json([
                'status' => false,
                'message' => 'Unauthorized access'
            ], 403);
        }

        $kebab = Kebab::find($kebabId);
        if (!$kebab) {
            return response()->json([
                'status' => false,
                'message' => 'Kebab not found'
            ], 404);
        }

        $favoriteExists = Favorite::where('user_id', Auth::id())->where('kebab_id', $kebabId)->exists();
        if ($favoriteExists) {
            return response()->json([
                'status' => false,
                'message' => 'Kebab already in favorites'
            ], 409);
        }

        Favorite::create([
            'user_id' => Auth::id(),
            'kebab_id' => $kebabId,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Kebab added to favorites successfully'
        ], 201);
    }

    /**
     * Remove a kebab from the user's favorites.
     *
     * This endpoint allows authenticated users to remove a specified kebab from their favorites.
     * If the kebab is not found in the user's favorites, an appropriate message is returned.
     *
     * @param Request $request The request object containing the user's session information.
     * @param int $kebabId The ID of the kebab to be removed from favorites.
     *
     * @response 200 {
     *   "status": true,
     *   "message": "Kebab removed from favorites successfully",
     *   "data": null
     * }
     * @response 403 {
     *   "status": false,
     *   "message": "Unauthorized access"
     * }
     * @response 404 {
     *   "status": false,
     *   "message": "Favorite not found"
     * }
     * @authenticated
     */

    public function removeFromFavorites(Request $request, $kebabId)
    {
        if (!Auth::check()) {
            return response()->json([
                'status' => false,
                'message' => 'Unauthorized access'
            ], 403);
        }

        $userId = Auth::id();

        $favorite = DB::table('favorites')
            ->where('user_id', $userId)
            ->where('kebab_id', $kebabId)
            ->first();

        if (!$favorite) {
            return response()->json([
                'status' => false,
                'message' => 'Favorite not found'
            ], 404);
        }

        DB::table('favorites')->where('id', $favorite->id)->delete();

        return response()->json([
            'status' => true,
            'message' => 'Kebab removed from favorites successfully',
            'data' => null
        ], 200);
    }
}
