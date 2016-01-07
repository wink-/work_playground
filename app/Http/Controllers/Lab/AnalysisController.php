<?php

namespace App\Http\Controllers\Lab;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Lab\Analysis;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class AnalysisController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        // Electroless Nickel Tanks EN1 - EN9

        $EN1 = Analysis::select('RecordName','FormName', 'Value4', 'Value1', 'Value12', 'Date')
        ->where('RecordName', '=', 'EN1')
        ->where('Value4','>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $EN2 = Analysis::select('RecordName','FormName', 'Value4', 'Value1', 'Value12', 'Date')
        ->where('RecordName', '=', 'EN2')
        ->where('Value4','>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $EN3 = Analysis::select('RecordName','FormName', 'Value4', 'Value1', 'Value12', 'Date')
        ->where('RecordName', '=', 'EN3')
        ->where('Value4','>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $EN4 = Analysis::select('RecordName','FormName', 'Value4', 'Value1', 'Value12', 'Date')
        ->where('RecordName', '=', 'EN4')
        ->where('Value4','>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $EN5 = Analysis::select('RecordName','FormName', 'Value4', 'Value1', 'Value12', 'Date')
        ->where('RecordName', '=', 'EN5')
        ->where('Value4','>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $EN6 = Analysis::select('RecordName','FormName', 'Value4', 'Value1', 'Value12', 'Date')
        ->where('RecordName', '=', 'EN6')
        ->where('Value4','>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $EN7 = Analysis::select('RecordName','FormName', 'Value4', 'Value1', 'Value12', 'Date')
        ->where('RecordName', '=', 'EN7')
        ->where('Value4','>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $EN8 = Analysis::select('RecordName','FormName', 'Value4', 'Value1', 'Value12', 'Date')
        ->where('RecordName', '=', 'EN8')
        ->where('Value4','>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $EN9 = Analysis::select('RecordName','FormName', 'Value4', 'Value1', 'Value12', 'Date')
        ->where('RecordName', '=', 'EN9')
        ->where('Value4','>', 0)
        ->orderBy('Date', 'desc')->first();

        // Alkaline Zinc Tanks Zinc1, Zinc2, Zinc3, Zinc5, Zinc6
        // Value2 is zinc metal, Value3 is Caustic
        $ZN1 = Analysis::select('RecordName','FormName', 'Value2', 'Value3', 'Date')
        ->where('RecordName', '=', 'Zinc1')
        ->where('Value2','>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $ZN2 = Analysis::select('RecordName','FormName', 'Value2', 'Value3', 'Date')
        ->where('RecordName', '=', 'Zinc2')
        ->where('Value2','>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $ZN3 = Analysis::select('RecordName','FormName', 'Value2', 'Value3', 'Date')
        ->where('RecordName', '=', 'Zinc3')
        ->where('Value2','>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $ZN5 = Analysis::select('RecordName','FormName', 'Value2', 'Value3', 'Date')
        ->where('RecordName', '=', 'Zinc5')
        ->where('Value2','>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $ZN6 = Analysis::select('RecordName','FormName', 'Value2', 'Value3', 'Date')
        ->where('RecordName', '=', 'Zinc6')
        ->where('Value2','>', 0)
        ->orderBy('Date', 'desc')->first();


        // Anodize Tanks AN1 = Hard Anodize, AN2 = Normal Anodize
        // Value5 is Free Acid, Value 6 is Total Aluminum
        $AN1 = Analysis::select('RecordName','FormName', 'Value5', 'Value6', 'Date')
        ->where('RecordName', '=', 'HD Anodize')
        ->where('Value5','>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $AN2 = Analysis::select('RecordName','FormName', 'Value5', 'Value6', 'Date')
        ->where('RecordName', '=', 'Anodize2')
        ->where('Value5','>', 0)
        ->orderBy('Date', 'desc')->first();

        // Zinc Nickel
        // Value1 is pH, Value7 is Zinc Metal, Value 8 is Nickel Metal, Value10 is total chloride
        $ZNNI1 = Analysis::select('RecordName','FormName', 'Value1', 'Value7', 'Value8', 'Value10', 'Date')
        ->where('RecordName', '=', 'Zinc Nickel')
        ->where('Value7','>', 0)
        ->orderBy('Date', 'desc')->first();

        // Hard Chrome CR1 is the larger tank. CR2 is the smaller tank
        // Value1 is pH, Value7 is Zinc Metal, Value 8 is Nickel Metal, Value10 is total chloride
        $CR1 = Analysis::select('RecordName','FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'Big Chrome')
        ->where('Value3','>', 0)
        ->orderBy('Date', 'desc')->first();

        $CR2 = Analysis::select('RecordName','FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'Small Chrome')
        ->where('Value3','>', 0)
        ->orderBy('Date', 'desc')->first();

        // l_ denotes low limit, h_ denotes high limit
        $limits = array(
            "l_en_metal" => 0.5, "h_en_metal" => 0.85, "l_en_pH" => 4.2, "h_en_pH" => 5.4,
            "l_zinc_metal" => 0.5, "h_zinc_metal" => 2.0, "l_zinc_caustic" => 8.0, "h_zinc_caustic" => 20.0,            
            "l_hard_anodize_free_acid" => 12.5, "h_hard_anodize_free_acid" => 14.0, "l_hard_anodize_total_aluminum" => 1.0, "h_hard_anodize_total_aluminum" => 2.5,
            "l_anodize_free_acid" => 12.0, "h_anodize_free_acid" => 16.0, "l_anodize_total_aluminum" => 1.0, "h_anodize_total_aluminum" => 2.5,            
            "l_chrome_metal" => 30.0, "h_chrome_metal" => 45.0,
            "l_tin_bright_metal" => 1.0, "h_tin_bright_metal" => 4.0, "l_tin_bright_sulfuric_acid" => 8.0, "h_tin_bright_sulfuric_acid" => 12,            
            "l_tin_dull_sodium_stannate" => 6.0, "h_tin_dull_sodium_stannate" => 22.0, "l_tin_dull_free_caustic" => 1.0, "h_tin_dull_free_caustic" => 2.0,            
            "l_zinc_nickel_zinc_metal" => 3.5, "h_zinc_nickel_zinc_metal" => 4.5, "l_zinc_nickel_nickel_metal" => 2.8, "h_zinc_nickel_nickel_metal" => 3.3,
                "l_zinc_nickel_total_chloride" => 27.0, "h_zinc_nickel_total_chloride" => 33.0, "l_zinc_nickel_pH" =>5.3, "h_zinc_nickel_pH" => 6.0

            );

        return view('analysis.index', $limits, 
                compact('EN1', 'EN2', 'EN3', 'EN4', 'EN5', 'EN6', 'EN7', 'EN8', 'EN9', 'ZN1', 'ZN2', 'ZN3', 'ZN5', 'ZN6', 'AN1', 'AN2', 'ZNNI1', 'CR1', 'CR2'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('analysis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        Analysis::create($request->all());

        Session::flash('flash_message', 'Analysis added!');

        return redirect('analysis');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $analysis = Analysis::findOrFail($id);

        return view('analysis.show', compact('analysis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $analysis = Analysis::findOrFail($id);

        return view('analysis.edit', compact('analysis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $analysis = Analysis::findOrFail($id);
        $analysis->update($request->all());

        Session::flash('flash_message', 'Analysis updated!');

        return redirect('analysis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        Analysis::destroy($id);

        Session::flash('flash_message', 'Analysis deleted!');

        return redirect('analysis');
    }

}
