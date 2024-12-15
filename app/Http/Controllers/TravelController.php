<?php
namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;
use App\Exports\TravelsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;

class TravelController extends Controller
{
    /**
     * Display a listing of the travels.
     */
    public function index(Request $request)
    {
        $travels = $this->getTravels($request->input('truck_id'));
        return view('travels.index', compact('travels'));
    }

    /**
     * Show the form for creating a new travel.
     */
    public function create()
    {
        return view('travels.create');
    }

    /**
     * Store a newly created travel in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        //dd(Auth::id());



        $data = $this->validateRequest($request);

        $data['user_id'] = Auth::id(); // Добавяме потребителя
        $travel = Travel::create($data);

        if ($travel) {
            return redirect()->route('travels.index')
                ->with('success', 'Пътуването е добавено успешно!');
        }

        return redirect()->route('travels.create')
            ->with('error', 'Грешка при добавяне на пътуването.');
    }

    /**
     * Export travels to Excel.
     */
    public function export(Request $request)
    {
        $truck_id = $request->input('truck_id');
        return Excel::download(new TravelsExport($truck_id), 'travels.xlsx');
    }

    /**
     * Get a list of travels based on user's role and optional truck filter.
     * Order by date.
     */

     private function getTravels($truck_id = null)
{
    if (Auth::user()->role_id == 3) {
        return $truck_id ?
            Travel::where('truck_id', $truck_id)->orderBy('created_at', 'desc')->get() :
            Travel::orderBy('created_at', 'desc')->get();
    }

    return Travel::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
}


    /**
     * Validate the incoming request for storing/updating travels.
     */
    private function validateRequest(Request $request)
    {
        return $request->validate([
            'truck_id' => 'required|string',
            'date' => 'required|date',
            'city' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'km' => 'required|integer',
            'connect_disconnect' => 'required|string|max:255',
            'trailer_nr' => 'required|string|max:255',
        ]);
    }
}
