<?php

namespace App\Http\Controllers\Lab;




use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Lab\Analysis;
use App\Http\Controllers\Controller;

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
        // Value3 is chrome metal
        $CR1 = Analysis::select('RecordName','FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'Big Chrome')
        ->where('Value3','>', 0)
        ->orderBy('Date', 'desc')->first();

        $CR2 = Analysis::select('RecordName','FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'Small Chrome')
        ->where('Value3','>', 0)
        ->orderBy('Date', 'desc')->first();

        // Cleaners An Clean1, An Clean 2, BL Clean 1, BL Clean 2, Cr Clean 1, EO soak cleaner,
        // Ni Al Clean, Ni Clean 1, Ni Clean 2, Zinc Clean 1
        // Value3 is concentration
        $ANClean1 = Analysis::select('RecordName','FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'An Clean1')
        ->where('Value3','>', 0)
        ->orderBy('Date', 'desc')->first();
        
        $ANClean2 = Analysis::select('RecordName','FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'An Clean 2')
        ->where('Value3','>', 0)
        ->orderBy('Date', 'desc')->first();

        $BLClean1 = Analysis::select('RecordName','FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'BL Clean 1')
        ->where('Value3','>', 0)
        ->orderBy('Date', 'desc')->first();

        $BLClean2 = Analysis::select('RecordName','FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'BL Clean 2')
        ->where('Value3','>', 0)
        ->orderBy('Date', 'desc')->first();
     
        $CrClean1 = Analysis::select('RecordName','FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'Cr Clean 1')
        ->where('Value3','>', 0)
        ->orderBy('Date', 'desc')->first();

        $EOsoakcleaner = Analysis::select('RecordName','FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'EO soak cleaner')
        ->where('Value3','>', 0)
        ->orderBy('Date', 'desc')->first();

        $NiAlClean = Analysis::select('RecordName','FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'Ni Al Clean')
        ->where('Value3','>', 0)
        ->orderBy('Date', 'desc')->first();

        $NiClean1 = Analysis::select('RecordName','FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'Ni Clean 1')
        ->where('Value3','>', 0)
        ->orderBy('Date', 'desc')->first();

        $NiClean2 = Analysis::select('RecordName','FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'Ni Clean 2')
        ->where('Value3','>', 0)
        ->orderBy('Date', 'desc')->first();        

        $ZincClean1 = Analysis::select('RecordName','FormName', 'Value3', 'Date')
        ->where('RecordName', '=', 'Zinc Clean 1')
        ->where('Value3','>', 0)
        ->orderBy('Date', 'desc')->first();

        // Tin bright and tin bull
        $TinBright = Analysis::select('RecordName','FormName', 'Value3', 'Value5', 'Value6', 'Date')
        ->where('RecordName', '=', 'Bright Tin')
        ->where('Value3','>', 0)
        ->orderBy('Date', 'desc')->first();

        $TinDull = Analysis::select('RecordName','FormName', 'Value3', 'Value5', 'Value6', 'Date')
        ->where('RecordName', '=', 'Dull Tin')
        ->where('Value3','>', 0)
        ->orderBy('Date', 'desc')->first();

        //Cad Tanks Big Cad Tk, SmCadTk
        $BigCad = Analysis::select('RecordName','FormName', 'Value2', 'Value4', 'Value6', 'Date')
        ->where('RecordName', '=', 'Dull Tin')
        ->where('Value3','>', 0)
        ->orderBy('Date', 'desc')->first();

        // l_ denotes low limit, h_ denotes high limit
        $limits = array(
            "l_en_metal" => 0.5, "h_en_metal" => 0.85, "l_en_pH" => 4.2, "h_en_pH" => 5.4,
            "l_zinc_metal" => 0.5, "h_zinc_metal" => 2.0, "l_zinc_caustic" => 8.0, "h_zinc_caustic" => 20.0,            
            "l_hard_anodize_free_acid" => 12.5, "h_hard_anodize_free_acid" => 15.0, "l_hard_anodize_total_aluminum" => 1.0, "h_hard_anodize_total_aluminum" => 2.5,
            "l_anodize_free_acid" => 12.5, "h_anodize_free_acid" => 15.0, "l_anodize_total_aluminum" => 1.0, "h_anodize_total_aluminum" => 2.5,            
            "l_chrome_metal" => 30.0, "h_chrome_metal" => 45.0,
            "l_tin_bright_metal" => 1.0, "h_tin_bright_metal" => 4.0, "l_tin_bright_sulfuric_acid" => 8.0, "h_tin_bright_sulfuric_acid" => 12,
                "l_tin_bright_stannous_sulfate" => 3, "h_tin_bright_stannous_sulfate" => 6,
            "l_tin_dull_sodium_stannate" => 6.0, "h_tin_dull_sodium_stannate" => 22.0, "l_tin_dull_free_caustic" => 1.0, "h_tin_dull_free_caustic" => 2.0,         
            "l_zinc_nickel_zinc_metal" => 3.5, "h_zinc_nickel_zinc_metal" => 4.5, "l_zinc_nickel_nickel_metal" => 2.8, "h_zinc_nickel_nickel_metal" => 3.3,
                "l_zinc_nickel_total_chloride" => 27.0, "h_zinc_nickel_total_chloride" => 33.0, "l_zinc_nickel_pH" =>5.3, "h_zinc_nickel_pH" => 6.0,
            "l_heatbath1448" => 8.0, "h_heatbath1448" => 18, "l_oakite164" => 6.0, "h_oakite164" => 16.0, "l_nuvat" => 4.0, "h_nuvat" => 10.0


            );
        // Cleaners An Clean1, An Clean 2, BL Clean 1, BL Clean 2, Cr Clean 1, EO soak cleaner,
        // Ni Al Clean, Ni Clean 1, Ni Clean 2, Zinc Clean 1
        return view('analysis.index', $limits, 
                compact('EN1', 'EN2', 'EN3', 'EN4', 'EN5', 'EN6', 'EN7', 'EN8', 'EN9', 'ZN1', 'ZN2', 'ZN3', 'ZN5', 'ZN6', 'AN1', 'AN2', 'ZNNI1', 'CR1', 'CR2',
                    'ANClean1', 'ANClean2', 'BLClean1', 'BLClean2', 'CrClean1', 'EOsoakcleaner', 'NiAlClean', 'NiClean1', 'NiClean2', 'ZincClean1', 'TinBright',
                    'TinDull'));

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
