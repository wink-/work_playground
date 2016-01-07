
    <h2>Electroless Nickel</h2>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Tank</th><th>Bath</th><th>Nickel</th><th>pH</th><th>Last Checked</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{$EN1->RecordName}}</td>
                    <td>{{$EN1->FormName . ' - ' . $EN1->Value12}}</td>

                    {!! $EN1->Value4 < $l_en_metal || $EN1->Value4 > $h_en_metal ? '<td class="outRange">' : '<td class="inRange">'!!} {{$EN1->Value4 . ' oz/gal'}}</td>
                    <td>{{$EN1->Value1}}</td>
                    <td>{{$EN1->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$EN2->RecordName}}</td>
                    <td>{{$EN2->FormName . ' - ' . $EN2->Value12}}</td>
                    {!! $EN2->Value4 < $l_en_metal || $EN2->Value4 > $h_en_metal ? '<td class="outRange">' : '<td class="inRange">'!!} {{$EN2->Value4 . ' oz/gal'}}</td>
                    <td>{{$EN2->Value1}}</td>
                    <td>{{$EN2->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$EN3->RecordName}}</td>
                    <td>{{$EN3->FormName . ' - ' . $EN3->Value12}}</td>
                   {!! $EN3->Value4 < $l_en_metal || $EN3->Value4 > $h_en_metal ? '<td class="outRange">' : '<td class="inRange">'!!} {{$EN3->Value4 . ' oz/gal'}}</td>                   
                    <td>{{$EN3->Value1}}</td>
                    <td>{{$EN3->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$EN4->RecordName}}</td>
                    <td>{{$EN4->FormName . ' - ' . $EN4->Value12}}</td>
                   {!! $EN4->Value4 < $l_en_metal || $EN4->Value4 > $h_en_metal ? '<td class="outRange">' : '<td class="inRange">'!!} {{$EN4->Value4 . ' oz/gal'}}</td>
                    <td>{{$EN4->Value1}}</td>
                    <td>{{$EN4->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$EN5->RecordName}}</td>
                    <td>{{$EN5->FormName . ' - ' . $EN5->Value12}}</td>
                    {!! $EN5->Value4 < $l_en_metal || $EN5->Value4 > $h_en_metal ? '<td class="outRange">' : '<td class="inRange">'!!} {{$EN5->Value4 . ' oz/gal'}}</td>
                    <td>{{$EN5->Value1}}</td>
                    <td>{{$EN5->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$EN6->RecordName}}</td>
                    <td>{{$EN6->FormName . ' - ' . $EN6->Value12}}</td>
                    {!! $EN6->Value4 < $l_en_metal || $EN6->Value4 > $h_en_metal ? '<td class="outRange">' : '<td class="inRange">'!!} {{$EN6->Value4 . ' oz/gal'}}</td>
                    <td>{{$EN6->Value1}}</td>
                    <td>{{$EN6->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$EN7->RecordName}}</td>
                    <td>{{$EN7->FormName . ' - ' . $EN7->Value12}}</td>
                    {!! $EN7->Value4 < $l_en_metal || $EN7->Value4 > $h_en_metal ? '<td class="outRange">' : '<td class="inRange">'!!} {{$EN7->Value4 . ' oz/gal'}}</td>
                    <td>{{$EN7->Value1}}</td>
                    <td>{{$EN7->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$EN8->RecordName}}</td>
                    <td>{{$EN8->FormName . ' - ' . $EN8->Value12}}</td>
                    {!! $EN8->Value4 < $l_en_metal || $EN8->Value4 > $h_en_metal ? '<td class="outRange">' : '<td class="inRange">'!!} {{$EN8->Value4 . ' oz/gal'}}</td>
                    <td>{{$EN8->Value1}}</td>
                    <td>{{$EN8->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$EN9->RecordName}}</td>
                    <td>{{$EN9->FormName . ' - ' . $EN9->Value12}}</td>
                    {!! $EN9->Value4 < $l_en_metal || $EN9->Value4 > $h_en_metal ? '<td class="outRange">' : '<td class="inRange">'!!} {{$EN9->Value4 . ' oz/gal'}}</td>
                    <td>{{$EN9->Value1}}</td>
                    <td>{{$EN9->Date->diffForHumans()}}</td>
                </tr>                                                                                
            </tbody>   
        </table>
    </div>
<h2>Anodize</h2>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Tank</th><th>Bath</th><th>Free Acid</th><th>Total Aluminum</th><th>Last Checked</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{$AN1->RecordName}}</td>
                    <td>{{$AN1->FormName}}</td>

                    {!! $AN1->Value5 < $l_hard_anodize_free_acid || $AN1->Value5 > $h_hard_anodize_free_acid ? '<td class="outRange">' : '<td class="inRange">'!!} {{$AN1->Value5 . ' oz/gal'}}</td>
                    {!! $AN1->Value6 < $l_hard_anodize_total_aluminum || $AN1->Value6 > $h_hard_anodize_total_aluminum ? '<td class="outRange">' : '<td class="inRange">'!!} {{$AN1->Value6 . ' oz/gal'}}</td>                    
                    <td>{{$AN1->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$AN2->RecordName}}</td>
                    <td>{{$AN2->FormName}}</td>

                    {!! $AN2->Value5 < $l_anodize_free_acid || $AN2->Value5 > $h_anodize_free_acid ? '<td class="outRange">' : '<td class="inRange">'!!} {{$AN2->Value5 . ' oz/gal'}}</td>
                    {!! $AN2->Value6 < $l_anodize_total_aluminum || $AN2->Value6 > $h_anodize_total_aluminum ? '<td class="outRange">' : '<td class="inRange">'!!} {{$AN2->Value6 . ' oz/gal'}}</td>                    
                    <td>{{$AN2->Date->diffForHumans()}}</td>
                </tr>                                                                         
            </tbody>   
        </table>
    </div>

<h2>Zinc</h2>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Tank</th><th>Bath</th><th>Zinc</th><th>Caustic</th><th>Last Checked</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{$ZN1->RecordName}}</td>
                    <td>{{$ZN1->FormName}}</td>

                    {!! $ZN1->Value2 < $l_zinc_metal || $ZN1->Value2 > $h_zinc_metal ? '<td class="outRange">' : '<td class="inRange">'!!} {{$ZN1->Value2 . ' oz/gal'}}</td>
                    {!! $ZN1->Value3 < $l_zinc_caustic || $ZN1->Value3 > $h_zinc_caustic ? '<td class="outRange">' : '<td class="inRange">'!!} {{$ZN1->Value3 . ' oz/gal'}}</td>                    
                    <td>{{$ZN1->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$ZN2->RecordName}}</td>
                    <td>{{$ZN2->FormName }}</td>
                    {!! $ZN2->Value2 < $l_zinc_metal || $ZN2->Value2 > $h_zinc_metal ? '<td class="outRange">' : '<td class="inRange">'!!} {{$ZN2->Value2 . ' oz/gal'}}</td>
                    {!! $ZN2->Value3 < $l_zinc_caustic || $ZN2->Value3 > $h_zinc_caustic ? '<td class="outRange">' : '<td class="inRange">'!!} {{$ZN2->Value3 . ' oz/gal'}}</td> 
                    <td>{{$ZN2->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$ZN3->RecordName}}</td>
                    <td>{{$ZN3->FormName }}</td>
                   {!! $ZN3->Value2 < $l_zinc_metal || $ZN3->Value2 > $h_zinc_metal ? '<td class="outRange">' : '<td class="inRange">'!!} {{$ZN3->Value2 . ' oz/gal'}}</td>                   
                    {!! $ZN3->Value3 < $l_zinc_caustic || $ZN3->Value3 > $h_zinc_caustic ? '<td class="outRange">' : '<td class="inRange">'!!} {{$ZN3->Value3 . ' oz/gal'}}</td> 
                    <td>{{$ZN3->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$ZN5->RecordName}}</td>
                    <td>{{$ZN5->FormName }}</td>
                    {!! $ZN5->Value2 < $l_zinc_metal || $ZN5->Value2 > $h_zinc_metal ? '<td class="outRange">' : '<td class="inRange">'!!} {{$ZN5->Value2 . ' oz/gal'}}</td>
                    {!! $ZN5->Value3 < $l_zinc_caustic || $ZN5->Value3 > $h_zinc_caustic ? '<td class="outRange">' : '<td class="inRange">'!!} {{$ZN5->Value3 . ' oz/gal'}}</td> 
                    <td>{{$ZN5->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$ZN6->RecordName}}</td>
                    <td>{{$ZN6->FormName }}</td>
                    {!! $ZN6->Value2 < $l_zinc_metal || $ZN6->Value2 > $h_zinc_metal ? '<td class="outRange">' : '<td class="inRange">'!!} {{$ZN6->Value2 . ' oz/gal'}}</td>
                    {!! $ZN6->Value3 < $l_zinc_caustic || $ZN6->Value3 > $h_zinc_caustic ? '<td class="outRange">' : '<td class="inRange">'!!} {{$ZN6->Value3 . ' oz/gal'}}</td> 
                    <td>{{$ZN6->Date->diffForHumans()}}</td>
                </tr>
                                                                         
            </tbody>   
        </table>
    </div>

<h2>Zinc-Nickel</h2>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Tank</th><th>Bath</th><th>pH</th><th>Zinc Metal</th><th>Nickel Metal</th><th>Total Chloride</th><th>Last Checked</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{$ZNNI1->RecordName}}</td>
                    <td>{{$ZNNI1->FormName}}</td>
                    {!! $ZNNI1->Value1 < $l_zinc_nickel_pH || $ZNNI1->Value1 > $h_zinc_nickel_pH ? '<td class="outRange">' : '<td class="inRange">'!!} {{$ZNNI1->Value1}}</td>
                    {!! $ZNNI1->Value7 < $l_zinc_nickel_zinc_metal || $ZNNI1->Value7 > $h_zinc_nickel_zinc_metal ? '<td class="outRange">' : '<td class="inRange">'!!} {{$ZNNI1->Value7 . ' oz/gal'}}</td>
                    {!! $ZNNI1->Value8 < $l_zinc_nickel_nickel_metal || $ZNNI1->Value8 > $h_zinc_nickel_nickel_metal ? '<td class="outRange">' : '<td class="inRange">'!!} {{$ZNNI1->Value8 . ' oz/gal'}}</td>
                    {!! $ZNNI1->Value10 < $l_zinc_nickel_total_chloride || $ZNNI1->Value10 > $h_zinc_nickel_total_chloride ? '<td class="outRange">' : '<td class="inRange">'!!} {{$ZNNI1->Value10 . ' oz/gal'}}</td>                   
                    <td>{{$ZNNI1->Date->diffForHumans()}}</td>
                </tr>                                                                
            </tbody>   
        </table>
    </div>

<h2>Hard Chrome</h2>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Tank</th><th>Bath</th><th>Chrome Metal</th><th>Last Checked</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{$CR1->RecordName}}</td>
                    <td>{{$CR1->FormName}}</td>
                    {!! $CR1->Value3 < $l_chrome_metal || $CR1->Value3 > $h_chrome_metal ? '<td class="outRange">' : '<td class="inRange">'!!} {{$CR1->Value3 . 'oz/gal'}}</td>
                    <td>{{$CR1->Date->diffForHumans()}}</td>
                </tr>
                <tr>
                    <td>{{$CR2->RecordName}}</td>
                    <td>{{$CR2->FormName}}</td>
                    {!! $CR2->Value3 < $l_chrome_metal || $CR2->Value3 > $h_chrome_metal ? '<td class="outRange">' : '<td class="inRange">'!!} {{$CR2->Value3 . 'oz/gal'}}</td>
                    <td>{{$CR2->Date->diffForHumans()}}</td>
                </tr>
            </tbody>   
        </table>
    </div>    