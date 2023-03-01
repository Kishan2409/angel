@extends('layouts.master')
@section('content')
    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                <a class="btn btn-primary" href="{{ url('medium_rate') }}">Back</a>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12">
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Update {{ $msgName }}</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        {!! Form::open(['route' => ['medium_rate.update', $medium->id], 'method' => 'post', 'files' => true, 'id' => 'frm', 'name' => 'frm', 'class' => 'form-horizontal form-label-left', 'autocomplete' => 'off']) !!}
                        <input type="hidden" name="id" id="id" value="{{ $medium->id }}">
                        <input type='hidden' name="_method" value="PUT">
                        @csrf

                        <div class="col-md-12 col-sm-6 col-xs-24">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2> Support Margin</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="form-group">
                                        <label class=" col-md-1 col-sm-6 col-xs-24">Left</label>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <input type="text" id="support_margin_left" name="support_margin_left"
                                                placeholder="Support Margin Left"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ old('support_margin_left', $medium->support_margin_left) }}">
                                            @if ($errors->has('support_margin_left'))
                                                <label class="error"
                                                    for="support_margin_left">{{ $errors->first('support_margin_left') }}</label>
                                            @endif
                                        </div>
                                        <label class=" col-md-1 col-sm-6 col-xs-24">Right</label>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <input type="text" id="support_margin_right" name="support_margin_right"
                                                placeholder="Support Margin Right"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ old('support_margin_right', $medium->support_margin_right) }}">
                                            @if ($errors->has('support_margin_right'))
                                                <label class="error"
                                                    for="support_margin_right">{{ $errors->first('support_margin_right') }}</label>
                                            @endif
                                        </div>
                                        <label class=" col-md-1 col-sm-6 col-xs-24">Bottom</label>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <input type="text" id="support_margin_bottom" name="support_margin_bottom"
                                                placeholder="Support Margin Bottom"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ old('support_margin_bottom', $medium->support_margin_bottom) }}">
                                            @if ($errors->has('support_margin_bottom'))
                                                <label class="error"
                                                    for="support_margin_bottom">{{ $errors->first('support_margin_bottom') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12 col-sm-6 col-xs-24">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2> Poll Assembly+Shelf Detail</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="form-group">
                                        <label class=" col-md-2 col-sm-6 col-xs-24">Poll Width</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" id="poll_width" name="poll_width" placeholder="Poll Width"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ old('poll_width', $medium->poll_width) }}">
                                            @if ($errors->has('poll_width'))
                                                <label class="error"
                                                    for="poll_width">{{ $errors->first('poll_width') }}</label>
                                            @endif
                                        </div>
                                        <label class=" col-md-2 col-sm-6 col-xs-24">Poll Thickness</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" id="poll_thickness" name="poll_thickness"
                                                placeholder="Poll Thickness"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ old('poll_thickness', $medium->poll_thickness) }}">
                                            @if ($errors->has('poll_thickness'))
                                                <label class="error"
                                                    for="poll_thickness">{{ $errors->first('poll_thickness') }}</label>
                                            @endif
                                        </div>
                                        <label class=" col-md-2 col-sm-6 col-xs-24">Poll Per Piece</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" id="poll_per_piece" name="poll_per_piece"
                                                placeholder="Poll Per Piece"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ old('poll_per_piece', $medium->poll_per_piece) }}">
                                            @if ($errors->has('poll_per_piece'))
                                                <label class="error"
                                                    for="poll_per_piece">{{ $errors->first('poll_per_piece') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" col-md-2 col-sm-6 col-xs-24">Poll No</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" id="poll_no" name="poll_no" placeholder="Poll No"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ old('poll_no', $medium->poll_no) }}">
                                            @if ($errors->has('poll_no'))
                                                <label class="error"
                                                    for="poll_no">{{ $errors->first('poll_no') }}</label>
                                            @endif
                                        </div>
                                        <label class=" col-md-2 col-sm-6 col-xs-24">C-Channel Width</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" id="cchannel_width" name="cchannel_width"
                                                placeholder="C-Channel Width"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ old('cchannel_width', $medium->cchannel_width) }}">
                                            @if ($errors->has('cchannel_width'))
                                                <label class="error"
                                                    for="cchannel_width">{{ $errors->first('cchannel_width') }}</label>
                                            @endif
                                        </div>
                                        <label class=" col-md-2 col-sm-6 col-xs-24">C-Channel Thickness</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" id="cchannel_thickness" name="cchannel_thickness"
                                                placeholder="C-Channel Thickness"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ old('cchannel_thickness', $medium->cchannel_thickness) }}">
                                            @if ($errors->has('cchannel_thickness'))
                                                <label class="error"
                                                    for="cchannel_thickness">{{ $errors->first('cchannel_thickness') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" col-md-2 col-sm-6 col-xs-24">C-Channel Per Piece</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" id="cchannel_per_piece" name="cchannel_per_piece"
                                                placeholder="C-Channel Per Piece"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ old('cchannel_per_piece', $medium->cchannel_per_piece) }}">
                                            @if ($errors->has('cchannel_per_piece'))
                                                <label class="error"
                                                    for="cchannel_per_piece">{{ $errors->first('cchannel_per_piece') }}</label>
                                            @endif
                                        </div>
                                        <label class=" col-md-2 col-sm-6 col-xs-24">C-Channel No</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" id="cchannel_no" name="cchannel_no"
                                                placeholder="C-Channel No"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ old('cchannel_no', $medium->cchannel_no) }}">
                                            @if ($errors->has('cchannel_no'))
                                                <label class="error"
                                                    for="cchannel_no">{{ $errors->first('cchannel_no') }}</label>
                                            @endif
                                        </div>
                                        <label class=" col-md-2 col-sm-6 col-xs-24">Support Width</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" id="support_width" name="support_width"
                                                placeholder="Support Width"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ old('support_width', $medium->support_width) }}">
                                            @if ($errors->has('support_width'))
                                                <label class="error"
                                                    for="support_width">{{ $errors->first('support_width') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" col-md-2 col-sm-6 col-xs-24">Support Thickness</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" id="support_thickness" name="support_thickness"
                                                placeholder="Support Thickness"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ old('support_thickness', $medium->support_thickness) }}">
                                            @if ($errors->has('support_thickness'))
                                                <label class="error"
                                                    for="support_thickness">{{ $errors->first('support_thickness') }}</label>
                                            @endif
                                        </div>
                                        <label class=" col-md-2 col-sm-6 col-xs-24">Support Per-Piece</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" id="support_per_piece" name="support_per_piece"
                                                placeholder="Support Per-Piece"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ old('support_per_piece', $medium->support_per_piece) }}">
                                            @if ($errors->has('support_per_piece'))
                                                <label class="error"
                                                    for="support_per_piece">{{ $errors->first('support_per_piece') }}</label>
                                            @endif
                                        </div>
                                        <label class=" col-md-2 col-sm-6 col-xs-24">Support No</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" id="support_no" name="support_no" placeholder="Support No"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ old('support_no', $medium->support_no) }}">
                                            @if ($errors->has('support_no'))
                                                <label class="error"
                                                    for="support_no">{{ $errors->first('support_no') }}</label>
                                            @endif
                                        </div>
                                    </div>

                                    @php
                                        $deck_panel_width = (array) json_decode($medium->deck_panel_width);
                                        $deck_panel_thickness = (array) json_decode($medium->deck_panel_sheet_thickness);
                                        $angle_width = (array) json_decode($medium->angle_width);
                                        $angle_with_thickenss = (array) json_decode($medium->angle_width_thickness);
                                        $assembly_sheet_thickness = (array) json_decode($medium->assembly_sheet_thickness);
                                        
                                        // dd([
                                        // 	$angle_width
                                        // ]);

                                        $error = Session::get('errors');
                                        if($error){
                                            // dd($errors->first('deck_panel_width.90kg'));
                                        }
                                        
                                    @endphp
                                    <div class="form-group">
                                        <label class=" col-md-2 col-sm-6 col-xs-24">Dick Panel Width 90kg</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" name="deck_panel_width[90kg]"
                                                placeholder="Dick Panel Width 90kg"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ $deck_panel_width['90kg'] ?? '' }}">
                                                <label class="error">{{ $errors->first('deck_panel_width.90kg') }}</label>

                                        </div>

                                        <label class=" col-md-2 col-sm-6 col-xs-24">Dick Panel Width 150kg</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" name="deck_panel_width[150kg]"
                                                placeholder="Dick Panel Width 150kg"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ $deck_panel_width['150kg'] ?? '' }}">
                                                <label class="error">{{ $errors->first('deck_panel_width.150kg') }}</label>
                                        </div>

                                        <label class=" col-md-2 col-sm-6 col-xs-24">Dick Panel Width 250kg</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" name="deck_panel_width[250kg]"
                                                placeholder="Dick Panel Width 250kg"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ $deck_panel_width['250kg'] ?? '' }}">
                                            <label class="error">{{ $errors->first('deck_panel_width.250kg') }}</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class=" col-md-2 col-sm-6 col-xs-24">Dick Panel Sheet Thickness 90kg</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" name="deck_panel_thickness[90kg]"
                                                placeholder="Dick Panel Sheet Thickness 90kg"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ $deck_panel_thickness['90kg'] ?? '' }}">
                                            <label class="error">{{ $errors->first('deck_panel_thickness.90kg') }}</label>
                                        </div>

                                        <label class=" col-md-2 col-sm-6 col-xs-24">Dick Panel Sheet Thickness 150kg</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" name="deck_panel_thickness[150kg]"
                                                placeholder="Dick Panel Sheet Thickness 90kg"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ $deck_panel_thickness['150kg'] ?? '' }}">
                                                <label class="error">{{ $errors->first('deck_panel_thickness.150kg') }}</label>
                                        </div>

                                        <label class=" col-md-2 col-sm-6 col-xs-24">Dick Panel Sheet Thickness 250kg</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" name="deck_panel_thickness[250kg]"
                                                placeholder="Dick Panel Sheet Thickness 90kg"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ $deck_panel_thickness['250kg'] ?? '' }}">
                                                <label class="error">{{ $errors->first('deck_panel_thickness.250kg') }}</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class=" col-md-2 col-sm-6 col-xs-24"> Assembly Sheet Thickness 90kg</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" name="assembly_sheet_thickness[90kg]"
                                                placeholder="Angle Thickness 90kg"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ $assembly_sheet_thickness['90kg'] ?? '' }}">
                                                <label class="error">{{ $errors->first('assembly_sheet_thickness.90kg') }}</label>
                                        </div>

                                        <label class=" col-md-2 col-sm-6 col-xs-24"> Assembly Sheet Thickness 150kg</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" name="assembly_sheet_thickness[150kg]"
                                                placeholder="Assembly Sheet Thickness 150kg"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ $assembly_sheet_thickness['150kg'] ?? '' }}">
                                                <label class="error">{{ $errors->first('assembly_sheet_thickness.150kg') }}</label>
                                        </div>

                                        <label class=" col-md-2 col-sm-6 col-xs-24"> Assembly Sheet Thickness 250kg</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" name="assembly_sheet_thickness[250kg]"
                                                placeholder="Assembly Sheet Thickness 250kg"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ $assembly_sheet_thickness['250kg'] ?? '' }}">
                                                <label class="error">{{ $errors->first('assembly_sheet_thickness.250kg') }}</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class=" col-md-2 col-sm-6 col-xs-24"> Angle Width 90kg</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" name="angle_width[90kg]" placeholder="Angle Width 90kg"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ $angle_width['90kg'] ?? '' }}">
                                                <label class="error">{{ $errors->first('angle_width.90kg') }}</label>
                                        </div>

                                        <label class=" col-md-2 col-sm-6 col-xs-24"> Angle Width 150kg</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" name="angle_width[150kg]" placeholder="Angle Width 150kg"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ $angle_width['150kg'] ?? '' }}">
                                                <label class="error">{{ $errors->first('angle_width.150kg') }}</label>
                                        </div>

                                        <label class=" col-md-2 col-sm-6 col-xs-24"> Angle Width 250kg</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" name="angle_width[250kg]" placeholder="Angle Width 250kg"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ $angle_width['250kg'] ?? '' }}">
                                                <label class="error">{{ $errors->first('angle_width.250kg') }}</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class=" col-md-2 col-sm-6 col-xs-24"> Angle Thickness 90kg</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" name="angle_thickness[90kg]"
                                                placeholder="Angle Thickness 90kg"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ $angle_with_thickenss['90kg'] ?? '' }}">
                                                <label class="error">{{ $errors->first('angle_thickness.90kg') }}</label>
                                        </div>

                                        <label class=" col-md-2 col-sm-6 col-xs-24"> Angle Thickness 150kg</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" name="angle_thickness[150kg]"
                                                placeholder="Angle Thickness 150kg"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ $angle_with_thickenss['150kg'] ?? '' }}">
                                                <label class="error">{{ $errors->first('angle_thickness.150kg') }}</label>
                                        </div>

                                        <label class=" col-md-2 col-sm-6 col-xs-24"> Angle Thickness 250kg</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" name="angle_thickness[250kg]"
                                                placeholder="Angle Thickness 250kg"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ $angle_with_thickenss['250kg'] ?? '' }}">
                                                <label class="error">{{ $errors->first('angle_thickness.250kg') }}</label>
                                        </div>
                                    </div>


                                    <label class=" col-md-2 col-sm-6 col-xs-24"> Angel No</label>
                                    <div class="col-md-2 col-sm-6 col-xs-12">
                                        <input type="text" name="angle_no"
                                            placeholder="Angel No"
                                            class="form-control  amountonly col-md-4 col-xs-12"
                                            value="{{ $medium->angle_no ?? ''}}">
                                            <label class="error">{{ $errors->first('angle_no') }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-xs-24">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2> Rate Setting</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="form-group">
                                        <label class=" col-md-2 col-sm-6 col-xs-24">Profit Ratio</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" id="profit_ratio" name="profit_ratio"
                                                placeholder="Profit Ratio"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ old('profit_ratio', $medium->profit_ratio) }}">
                                            @if ($errors->has('profit_ratio'))
                                                <label class="error"
                                                    for="profit_ratio">{{ $errors->first('profit_ratio') }}</label>
                                            @endif
                                        </div>
                                        <label class=" col-md-2 col-sm-6 col-xs-24">Sheet Rate</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" id="sheet_rate" name="sheet_rate" placeholder="Sheet Rate"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ old('sheet_rate', $medium->sheet_rate) }}">
                                            @if ($errors->has('sheet_rate'))
                                                <label class="error"
                                                    for="sheet_rate">{{ $errors->first('sheet_rate') }}</label>
                                            @endif
                                        </div>
                                        <label class=" col-md-2 col-sm-6 col-xs-24">Galvanised Sheet Rate</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" id="galvanised_sheet_rate" name="galvanised_sheet_rate"
                                                placeholder="Galvanised Sheet Rate"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ old('galvanised_sheet_rate', $medium->galvanised_sheet_rate) }}">
                                            @if ($errors->has('galvanised_sheet_rate'))
                                                <label class="error"
                                                    for="galvanised_sheet_rate">{{ $errors->first('galvanised_sheet_rate') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-xs-24">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2> Fabrication Labour</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="form-group">
                                        <label class=" col-md-2 col-sm-6 col-xs-24">Poll Assembly</label>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <input type="text" id="poll_assembly_fabrication_labour"
                                                name="poll_assembly_fabrication_labour" placeholder="Poll Assembly"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ old('poll_assembly_fabrication_labour', $medium->poll_assembly_fabrication_labour) }}">
                                            @if ($errors->has('poll_assembly_fabrication_labour'))
                                                <label class="error"
                                                    for="poll_assembly_fabrication_labour">{{ $errors->first('poll_assembly_fabrication_labour') }}</label>
                                            @endif
                                        </div>
                                        <label class=" col-md-2 col-sm-6 col-xs-24">Self Angle</label>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <input type="text" id="shelf_angle_fabrication_labour"
                                                name="shelf_angle_fabrication_labour" placeholder="Self Angle"
                                                class="form-control  amountonly col-md-4 col-xs-12"
                                                value="{{ old('shelf_angle_fabrication_labour', $medium->shelf_angle_fabrication_labour) }}">
                                            @if ($errors->has('shelf_angle_fabrication_labour'))
                                                <label class="error"
                                                    for="shelf_angle_fabrication_labour">{{ $errors->first('shelf_angle_fabrication_labour') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12 col-sm-6 col-xs-24">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2> Others </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="form-group">
                                        <label class=" col-md-2 col-sm-6 col-xs-24">Both Side Connection(In Gm)</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" id="both_side_connector" name="both_side_connector"
                                                placeholder="Both Side Connection(In Gm)"
                                                class="form-control amountonly col-md-4 col-xs-12"
                                                value="{{ old('both_side_connector', $medium->both_side_connector) }}">
                                            @if ($errors->has('both_side_connector'))
                                                <label class="error"
                                                    for="both_side_connector">{{ $errors->first('both_side_connector') }}</label>
                                            @endif
                                        </div>
                                        <label class=" col-md-2 col-sm-6 col-xs-24">Coating Price(Per sq inch)</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" id="coating_price" name="coating_price"
                                                placeholder="Coating Price(Per sq inch)"
                                                class="form-control amountonly col-md-4 col-xs-12"
                                                value="{{ old('coating_price', $medium->coating_price) }}">
                                            @if ($errors->has('coating_price'))
                                                <label class="error"
                                                    for="coating_price">{{ $errors->first('coating_price') }}</label>
                                            @endif
                                        </div>
                                        <label class=" col-md-2 col-sm-6 col-xs-24">Galvanised Price</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" id="galvanised_price" name="galvanised_price"
                                                placeholder="Galvanised Price"
                                                class="form-control amountonly col-md-4 col-xs-12"
                                                value="{{ old('galvanised_price', $medium->galvanised_price) }}">
                                            @if ($errors->has('galvanised_price'))
                                                <label class="error"
                                                    for="galvanised_price">{{ $errors->first('galvanised_price') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" col-md-2 col-sm-6 col-xs-24">Sheet Thickness</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" id="sheet_thickness" name="sheet_thickness"
                                                placeholder="Sheet Thickness"
                                                class="form-control amountonly col-md-4 col-xs-12"
                                                value="{{ old('sheet_thickness', $medium->sheet_thickness) }}">
                                            @if ($errors->has('sheet_thickness'))
                                                <label class="error"
                                                    for="sheet_thickness">{{ $errors->first('sheet_thickness') }}</label>
                                            @endif
                                        </div>
                                        <label class=" col-md-2 col-sm-6 col-xs-24">Bending Charge</label>
                                        <div class="col-md-2 col-sm-6 col-xs-12">
                                            <input type="text" id="bending_charge" name="bending_charge"
                                                placeholder="Bending Charge"
                                                class="form-control amountonly col-md-4 col-xs-12"
                                                value="{{ old('bending_charge', $medium->bending_charge) }}">
                                            @if ($errors->has('bending_charge'))
                                                <label class="error"
                                                    for="bending_charge">{{ $errors->first('bending_charge') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                {{ Form::reset('Reset', ['class' => 'btn btn-primary']) }}
                                {{ Form::submit('Update', ['class' => 'btn btn-success']) }}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
