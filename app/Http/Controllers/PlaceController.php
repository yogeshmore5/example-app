<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PlaceController extends Controller
{
    public function index()
    {
        $places = Place::paginate(10);
        if ($places->isEmpty()) {
            return response()->json(['message' => 'No records found'], 200);
        }

        return response()->json($places);
    }

    /**
     * @SWG\Post(
     *     path="/api/places",
     *     summary="Create a new place",
     *     tags={"Places"},
     *     @SWG\Parameter(
     *         name="name",
     *         in="formData",
     *         type="string",
     *         description="Name of the place",
     *         required=true,
     *     ),
     *     @SWG\Parameter(
     *         name="country",
     *         in="formData",
     *         type="string",
     *         description="Country in which it is located",
     *         required=true,
     *     ),
     *
     *     @SWG\Parameter(
     *         name="state",
     *         in="formData",
     *         type="string",
     *         description="State in which it is located",
     *         required=true,
     *     ),
     *
     *     @SWG\Parameter(
     *         name="best_month_to_visit",
     *         in="formData",
     *         type="string",
     *         description="Best month to Visit",
     *         required=true,
     *     ),
     *
     *     @SWG\Parameter(
     *         name="best_season_to_visit",
     *         in="formData",
     *         type="string",
     *         description="Best season to Visit",
     *         required=true,
     *     ),
     *
     *     @SWG\Parameter(
     *         name="is_active",
     *         in="formData",
     *         type="boolean",
     *         description="is this record active",
     *         required=true,
     *     ),
     *
     *     @SWG\Parameter(
     *         name="photo_name",
     *         in="formData",
     *         type="string",
     *         description="name for photo",
     *         required=true,
     *     ),
     *
     *     @SWG\Parameter(
     *         name="photo",
     *         in="formData",
     *         type="file",
     *         description="Photo of Place",
     *         required=true,
     *     ),
     *
     *
     *     @SWG\Response(
     *         response=201,
     *         description="Place created successfully"
     *     ),
     *
     * )
    */

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'best_month_to_visit' => 'required|string|max:255',
            'best_season_to_visit' => 'required|string|max:255',
            'is_active' => 'required|boolean',
            'photo_name' => 'required|string|max:255',
            'photo' => 'image|mimes:png,jpg,jpeg,gif|max:2048', // Max size is in kilobytes
        ]);

        $placeData = $request->except('photo');

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = Str::random(20) . '.' . $photo->getClientOriginalExtension();
            $photo->storeAs('places', $photoName, 'public');
            $placeData['photo_name'] = $photoName;
        }

        $place = Place::create($placeData);

        return response()->json($place, 201);
    }

    public function show(Place $place)
    {
        return response()->json($place);
    }

    public function update(Request $request, Place $place)
    {
        $place->update($request->all());
        return response()->json($place);
    }

    public function destroy(Place $place)
    {
        $place->delete();
        return response()->json(null, 204);
    }
}
