@push('stylesheets')
<link href="{{ url('/')}}/admin/css/icheck/green.css" rel="stylesheet">
<link href="{{url('/')}}/admin/css/select2/select2.min.css" rel="stylesheet">
<link href="{{url('/')}}/admin/css/select2/select2-bootstrap.min.css" rel="stylesheet">
<style>
    .select2-selection__choice {
        background-color: #1ABB9C !important;
        color: white !important;
        font-size: 12px;
        font-family:"Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif;
    }

    .select2-selection__choice__remove {
        background-color: #1ABB9C !important;
        color: white !important;

    }


</style>

@endpush
<div class="x_panel">
    <div class="x_title">
        <h2>Form Basic Elements <small>different form elements</small></h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a>
                    </li>
                    <li><a href="#">Settings 2</a>
                    </li>
                </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <br>
        <form class="form-horizontal form-label-left">

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Default Input</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" class="form-control" placeholder="Default Input">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Disabled Input </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Read-Only Input</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea class="form-control" rows="3" placeholder="rows=&quot;3&quot;"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <input type="password" class="form-control" value="passwordonetwo">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">AutoComplete</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <select name ="autocomplete" id="autocomplete"  class="form-control">
                    <option></option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <select class="form-control">
                        <option>Choose option</option>
                        <option>Option one</option>
                        <option>Option two</option>
                        <option>Option three</option>
                        <option>Option four</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Custom</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <select class="select2_single form-control " tabindex="-1" aria-hidden="true">
                        <option></option>
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NM">New Mexico</option>
                        <option value="ND">North Dakota</option>
                        <option value="UT">Utah</option>
                        <option value="WY">Wyoming</option>
                        <option value="AR">Arkansas</option>
                        <option value="IL">Illinois</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="OK">Oklahoma</option>
                        <option value="SD">South Dakota</option>
                        <option value="TX">Texas</option>
                    </select>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Grouped</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <select class="select2_group form-control" name="state">
                        <optgroup label="Alaskan/Hawaiian Time Zone">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                        </optgroup>
                        <optgroup label="Pacific Time Zone">
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                        </optgroup>
                        <optgroup label="Mountain Time Zone">
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NM">New Mexico</option>
                            <option value="ND">North Dakota</option>
                            <option value="UT">Utah</option>
                            <option value="WY">Wyoming</option>
                        </optgroup>
                        <optgroup label="Central Time Zone">
                            <option value="AL">Alabama</option>
                            <option value="AR">Arkansas</option>
                            <option value="IL">Illinois</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="OK">Oklahoma</option>
                            <option value="SD">South Dakota</option>
                            <option value="TX">Texas</option>
                            <option value="TN">Tennessee</option>
                            <option value="WI">Wisconsin</option>
                        </optgroup>
                        <optgroup label="Eastern Time Zone">
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="IN">Indiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="OH">Ohio</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WV">West Virginia</option>
                        </optgroup>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Multiple</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <select class="select2_multiple form-control" multiple tabindex="-1" aria-hidden="true">
                        <option>Choose option</option>
                        <option>Option one</option>
                        <option>Option two</option>
                        <option>Option three</option>
                        <option>Option four</option>
                        <option>Option five</option>
                        <option>Option six</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12 control-label">Checkboxes and radios
                    <br>
                    <small class="text-navy">Normal Bootstrap elements</small>
                </label>

                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value=""> Option one. select more than one options
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value=""> Option two. select more than one options
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Option one. only select one option
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> Option two. only select one option
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 col-sm-3 col-xs-12 control-label">Checkboxes and radios
                    <br>
                    <small class="text-navy">Normal Bootstrap elements</small>
                </label>

                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="checkbox">
                        <label>
                            <div class="icheckbox_flat-green checked" style="position: relative;"><input type="checkbox" class="flat" checked="checked" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Checked
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Unchecked
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <div class="icheckbox_flat-green disabled" style="position: relative;"><input type="checkbox" class="flat" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Disabled
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <div class="icheckbox_flat-green checked disabled" style="position: relative;"><input type="checkbox" class="flat" disabled="disabled" checked="checked" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Disabled &amp; checked
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <div class="iradio_flat-green checked" style="position: relative;"><input type="radio" class="flat" checked="" name="iCheck" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Checked
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <div class="iradio_flat-green" style="position: relative;"><input type="radio" class="flat" name="iCheck" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Unchecked
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <div class="iradio_flat-green disabled" style="position: relative;"><input type="radio" class="flat" name="iCheck" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Disabled
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <div class="iradio_flat-green checked disabled" style="position: relative;"><input type="radio" class="flat" name="iCheck3" disabled="disabled" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Disabled &amp; Checked
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Switch</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="">
                        <label>
                            <input type="checkbox" class="js-switch" checked="" style="display: none;" data-switchery="true"><span class="switchery switchery-default" style="border-color: rgb(38, 185, 154); box-shadow: rgb(38, 185, 154) 0px 0px 0px 11px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s; background-color: rgb(38, 185, 154);"><small style="left: 12px; transition: background-color 0.4s, left 0.2s; background-color: rgb(255, 255, 255);"></small></span> Checked
                        </label>
                    </div>
                    <div class="">
                        <label>
                            <input type="checkbox" class="js-switch" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); transition: border 0.4s, box-shadow 0.4s; background-color: rgb(255, 255, 255);"><small style="left: 0px; transition: background-color 0.4s, left 0.2s;"></small></span> Unchecked
                        </label>
                    </div>
                    <div class="">
                        <label>
                            <input type="checkbox" class="js-switch" disabled="disabled" data-switchery="true" readonly="" style="display: none;"><span class="switchery switchery-default" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); transition: border 0.4s, box-shadow 0.4s; opacity: 0.5; background-color: rgb(255, 255, 255);"><small style="left: 0px; transition: background-color 0.4s, left 0.2s;"></small></span> Disabled
                        </label>
                    </div>
                    <div class="">
                        <label>
                            <input type="checkbox" class="js-switch" disabled="disabled" checked="checked" style="display: none;" data-switchery="true" readonly=""><span class="switchery switchery-default" style="border-color: rgb(38, 185, 154); box-shadow: rgb(38, 185, 154) 0px 0px 0px 11px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s; opacity: 0.5; background-color: rgb(38, 185, 154);"><small style="left: 12px; transition: background-color 0.4s, left 0.2s; background-color: rgb(255, 255, 255);"></small></span> Disabled Checked
                        </label>
                    </div>
                </div>
            </div>


            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                    <button type="submit" class="btn btn-primary">Cancel</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>

@push('scripts')
<script src="{{url('/')}}/js/icheck/icheck.min.js"></script>
<script src="{{url('/')}}/js/select2/select2.min.js"></script>
<script>

    $('input[type="checkbox"]').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
    });


</script>
<script>
    $(document).ready(function() {
        var data = [{ id: 0, text: 'opcao1' }, { id: 1, text: 'opcao2' }, { id: 2, text: 'duplicado' }, { id: 3, text: 'opcao 2' }, { id: 4, text: 'opcao 5' }];

        $("#autocomplete").select2({
            theme: "bootstrap",

            placeholder: "Escreva no mínimo 2 caracteres",

            data: data,
        });

        $(".select2_single").select2({
            theme: "bootstrap",
            placeholder: "Select a state",
            allowClear: true
        });
        $(".select2_group").select2({
            theme: "bootstrap"
        });
        $(".select2_multiple").select2({
            theme: "bootstrap",
            maximumSelectionLength: 4,
            placeholder: "With Max Selection limit 4",
            allowClear: true
        });
    });
</script>
<!-- /Select2 -->



@endpush