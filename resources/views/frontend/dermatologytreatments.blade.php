@extends('layouts.frontend')

@section('content')
<section class="treatment-banner">
    <div class="container">
        <div class="treat-banner-con">
            <h2>Treatment's (Specialities)</h2>
        </div>
    </div>
</section>
<!-- Caption -->
<!-- The "vtabs" class establishes a scope -->
<section class="treatment-box mt-5">
    <div class="col-md-12 text-center">
        <h2 data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000"></h2>
    </div>
    <div class="container vtabs">
        <div class="row">
            <!-- Tabs -->
            <div class="col-md-3">
                <ul class="nav nav-tabs left-tabs" role="tablist">
                    <div class="all-tre text-center pt-3">
                        <h5>All Treatments</h5>
                    </div>
                     @foreach($diagnostics as $key => $diagnostic)
                    <li class="nav-item" role="presentation">
                        <div id="lorem-left-tab" class="nav-link tab-clickable {{ ($key==0) ? 'active' : '' }}" role="tab" data-bs-toggle="tab" data-bs-target="#sl{{ $diagnostic->id }}" aria-controls="sl{{ $diagnostic->id }}" aria-selected="{{ ($key==0) ? true : false }}">
                         {{ $diagnostic->name }}
                        </div>
                    </li>
                    @endforeach
                   
                </ul>
            </div>
            <!-- Tab contents -->
            <div class="col-md-9">
                <div class="container">
                    <div id="accordion-left-tabs" class="tab-content accordion p-0">
                        @foreach($diagnostics as $key => $diagnostic)
                            <div id="sl{{ $diagnostic->id }}" class="tab-pane fade show {{ ($key==0) ? 'active' : '' }} accordion-item" role="tabpanel">
                            <div class="accordion-header" role="tab">
                                <button class="accordion-button collapsed mobile-aco" type="button" role="button" data-bs-toggle="collapse" data-bs-target="#lorem-left-article" aria-expanded="true" aria-controls="lorem-left-article">
                                {{ $diagnostic->Title }}
                                </button>
                            </div>
                            <article id="lorem-left-article" class="accordion-body accordion-collapse collapse p-0" data-bs-parent="#accordion-left-tabs" aria-labelledby="lorem-left-tab">
                                <div class="trea-box">
                                    <div class="text-center">
                                        <h2 class="main_title" data-aos="zoom-in" data-aos-delay="300" data-aos-offset="1" data-aos-duration="2000">{{ $diagnostic->Title }}</h2>
                                        <p>{{ $diagnostic->Short_des }}</p>
                                    </div>
                                    @foreach($diagnostic->subtitles as $subtitle)
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed acor-buton" type="button" data-bs-toggle="collapse" data-bs-target="#subtitle{{ $subtitle['subtitle']->id }}" aria-expanded="false" aria-controls="collapseTwo">
                                                {{ $subtitle['subtitle']->subtitle }}
                                                </button>
                                            </h2>
                                            <div id="subtitle{{ $subtitle['subtitle']->id }}" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="aco">
                                                        <img src="{{asset('Diagnostics')}}/{{$subtitle['subtitle']->image}}" />
                                                    </div>
                                                    <div class="aco-img">
                                                        <!-- <h6 class="text-center role pt-3"><b class="pric">Price:</b> ₹13900</h6> -->
                                                        <p class="text-center">{{$subtitle['subtitle']->description}}</p>
                                                    </div>
                                                    
                                                    <div class="row">

                                                            @foreach($subtitle['tests'] as $test)
                                                            @if(trim($test->test_item)!="" && trim($test->Price)!="")
                                                            <div class="col-lg-6">
                                                                <div class="aco-boxs">
                                                                    <h6>{{ $test->test_item }}</h6>
                                                                    <p><b>Price:</b> ₹{{ $test->Price }}</p>
                                                                </div>
                                                            </div>
                                                            @endif
                                                            @endforeach
                                                            
                                                        </div>
                                                    <div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    @endforeach
                                </div>
                            </article>
                        </div>
                        @endforeach
                  
                                    <div class="ellipsis"></div>
                                </button>
                            </div>
                            <!-- <article id="llanfairpwllgwyngyll-left-article" class="accordion-body accordion-collapse collapse" data-bs-parent="#accordion-left-tabs" aria-labelledby="llanfairpwllgwyngyll-left-tab">
                                test
                            </article> -->
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- POP UP
<aside id="popUp" class="popup">
    <div class="popUpContainer">
        <header>
            <a href="#!" class="closePopUp">X</a>
            <div class="package-popup" style="overflow-y: scroll; max-height: 80vh;">
                <div class="table-responsive">
                    <table class="table">
                        <tr class="popup-head">
                            <th>Prime Full BodyCheck Up</th>
                            <th>Samrt Full Body Check Up</th>
                        </tr>
                        <tr class="popup-head2">
                            <th>Urine Routine & Microscopy(Urine R/M)</th>
                            <th>Thryoid Profile-Total (T3 T4 & TSH Ultra-Sensitive)</th>
                        </tr>
                        <tr>
                            <td>Albumin</td>
                            <td>T3 Total Tri lodothyronine</td>
                        </tr>
                        <tr>
                            <td>Amorphous Deposit</td>
                            <td>T4 Total Thyroxine</td>
                        </tr>
                        <tr>
                            <td>Bacteria</td>
                            <td>TSH Ultra-Sensitive</td>
                        </tr>
                        <tr>
                            <td>Blood</td>
                            <td style="background-color: #515151 !important; color: #fff;">Blood Glucose Fasting</td>
                        </tr>
                        <tr>
                            <td>Cast</td>
                            <td style="background-color: #515151 !important; color: #fff;">Urine Routine & Microscopy(Urine R/M)</td>
                        </tr>
                        <tr>
                            <td>Colour</td>
                            <td>Albumin</td>
                        </tr>
                        <tr>
                            <td>Crystals</td>
                            <td>Amorphous Deposit</td>
                        </tr>
                        <tr>
                            <td>Deposit</td>
                            <td>Bacteria</td>
                        </tr>

                        <tr>
                            <td>Epithelial cells</td>
                            <td>Blood</td>
                        </tr>
                        <tr>
                            <td>Leucocyte Esterase</td>
                            <td>Cast</td>
                        </tr>
                        <tr>
                            <td>Nitrate</td>
                            <td>Colour</td>
                        </tr>
                        <tr>
                            <td>pH Urine</td>
                            <td>Crystals</td>
                        </tr>
                        <tr>
                            <td>Pus cells (Leukocytes)</td>
                            <td>Deposit</td>
                        </tr>
                        <tr>
                            <td>Red blood cells</td>
                            <td>Epithelial cells</td>
                        </tr>
                        <tr>
                            <td>Specific gravity</td>
                            <td>Leucocyte Esterase</td>
                        </tr>
                        <tr>
                            <td>Sugar</td>
                            <td>Nitrate</td>
                        </tr>
                        <tr>
                            <td>Transparency</td>
                            <td>pH Urine</td>
                        </tr>
                        <tr>
                            <td>Urine ketones</td>
                            <td>Pus cells (Leukocytes)</td>
                        </tr>
                        <tr>
                            <td>Urobilinogen</td>
                            <td>Red blood cells</td>
                        </tr>
                        <tr>
                            <td>Volume</td>
                            <td>Specific gravity</td>
                        </tr>
                        <tr>
                            <td>Yeast Cells</td>
                            <td>Sugar</td>
                        </tr>
                        <tr>
                            <td style="background-color: #515151 !important; color: #fff;">Iron Studies</td>
                            <td>Transparency</td>
                        </tr>
                        <tr>
                            <td>Iron Serum</td>
                            <td>Urine ketones</td>
                        </tr>
                        <tr>
                            <td>TIBC</td>
                            <td>Urobilinoen</td>
                        </tr>
                        <tr>
                            <td>Transferrin Saturation</td>
                            <td>Volume</td>
                        </tr>
                        <tr>
                            <td>Uibs</td>
                            <td>Yeast Cells</td>
                        </tr>
                        <tr>
                            <td style="background-color: #515151 !important; color: #fff;">Kidney Function Test/KFT</td>
                            <td style="background-color: #515151 !important; color: #fff;">Kidney Function Test/KFT</td>
                        </tr>
                        <tr>
                            <td>Blood Urea</td>
                            <td>Blood Urea</td>
                        </tr>
                        <tr>
                            <td>BUN</td>
                            <td>BUN</td>
                        </tr>
                        <tr>
                            <td>BUN/Creatinine Ratio</td>
                            <td>BUN/Creatinine Ratio</td>
                        </tr>
                        <tr>
                            <td>Calcium</td>
                            <td>Calcium</td>
                        </tr>
                        <tr>
                            <td>Chloride</td>
                            <td>Chloride</td>
                        </tr>
                        <tr>
                            <td>Creatinine</td>
                            <td>Creatinine</td>
                        </tr>
                        <tr>
                            <td>Phosphorus</td>
                            <td>Phosphorus</td>
                        </tr>
                        <tr>
                            <td>Potassium</td>
                            <td>Potassium</td>
                        </tr>
                        <tr>
                            <td>Sodium</td>
                            <td>Sodium</td>
                        </tr>
                        <tr>
                            <td>Uric Acid</td>
                            <td>Uric Acid</td>
                        </tr>
                        <tr>
                            <td>Absolute Basophils Count Blood</td>
                            <td>Absolute Basophils Count Blood</td>
                        </tr>
                        <tr>
                            <td>Absolute Eosinophil Count Blood</td>
                            <td>Absolute Eosinophil Count Blood</td>
                        </tr>
                        <tr>
                            <td>Absolute Lymphocyte Count Blood</td>
                            <td>Absolute Lymphocyte Count Blood</td>
                        </tr>
                        <tr>
                            <td>Absolute Monocyte Count Blood</td>
                            <td>Absolute Monocyte Count Blood</td>
                        </tr>
                        <tr>
                            <td>Absolute Neutrophil Count Blood</td>
                            <td>Absolute Neutrophil Count Blood</td>
                        </tr>
                        <tr>
                            <td>Basophils</td>
                            <td>Basophils</td>
                        </tr>
                        <tr>
                            <td>Eosinophils</td>
                            <td>Eosinophils</td>
                        </tr>
                        <tr>
                            <td>ESR Automated</td>
                            <td>ESR Automated</td>
                        </tr>
                        <tr>
                            <td>Hemoglobin Hb</td>
                            <td>Hemoglobin Hb</td>
                        </tr>
                        <tr>
                            <td>Lymphocytes</td>
                            <td>Lymphocytes</td>
                        </tr>
                        <tr>
                            <td>MCH</td>
                            <td>MCH</td>
                        </tr>
                        <tr>
                            <td>MCHC</td>
                            <td>MCHC</td>
                        </tr>
                        <tr>
                            <td>MCV</td>
                            <td>MCV</td>
                        </tr>
                        <tr>
                            <td>MENTER INDEX9MCV/RCC</td>
                            <td>MENTER INDEX9MCV/RCC</td>
                        </tr>
                        <tr>
                            <td>Monocytes</td>
                            <td>Monocytes</td>
                        </tr>
                        <tr>
                            <td>MPV Mean Platelet Volume</td>
                            <td>MPV Mean Platelet Volume</td>
                        </tr>
                        <tr>
                            <td>Neutrophils</td>
                            <td>Neutrophils</td>
                        </tr>
                        <tr>
                            <td>PCT</td>
                            <td>PCT</td>
                        </tr>
                        <tr>
                            <td>PCV Haematocrit</td>
                            <td>PCV Haematocrit</td>
                        </tr>
                        <tr>
                            <td>PDW Platelet Distribution Width</td>
                            <td>PDW Platelet Distribution Width</td>
                        </tr>
                        <tr>
                            <td>Platelet Count Thrombocyte count</td>
                            <td>Platelet Count Thrombocyte count</td>
                        </tr>
                        <tr>
                            <td>RDW-CV</td>
                            <td>RDW-CV</td>
                        </tr>
                        <tr>
                            <td>RDW (Red Cell Distribution Width)</td>
                            <td>RDW (Red Cell Distribution Width)</td>
                        </tr>
                        <tr>
                            <td>WBC-Total Counts Leucocytes</td>
                            <td>WBC-Total Counts Leucocytes</td>
                        </tr>
                        <tr>
                            <td style="background-color: #515151 !important; color: #fff;">Liver Function Test/LFT</td>
                            <td style="background-color: #515151 !important; color: #fff;">Liver Function Test/LFT</td>
                        </tr>
                        <tr>
                            <td>A/G Ratio</td>
                            <td>A/G Ratio</td>
                        </tr>
                        <tr>
                            <td>Albumni Serum</td>
                            <td>Albumni Serum</td>
                        </tr>
                        <tr>
                            <td>Alkaline Phosphatase Serum</td>
                            <td>Alkaline Phosphatase Serum</td>
                        </tr>
                        <tr>
                            <td>Bilirubin Direct Serum</td>
                            <td>Bilirubin Direct Serum</td>
                        </tr>
                        <tr>
                            <td>Bilirubin Total Serum</td>
                            <td>Bilirubin Total Serum</td>
                        </tr>
                        <tr>
                            <td>GGTP (Gamma GT)</td>
                            <td>GGTP (Gamma GT)</td>
                        </tr>
                        <tr>
                            <td>Globuin</td>
                            <td>Globuin</td>
                        </tr>
                        <tr>
                            <td>Protein Serum</td>
                            <td>Protein Serum</td>
                        </tr>
                        <tr>
                            <td>SGOT/AST</td>
                            <td>SGOT/AST</td>
                        </tr>
                        <tr>
                            <td>SGOT/SGPT Ratio</td>
                            <td>SGOT/SGPT Ratio</td>
                        </tr>
                        <tr>
                            <td>SGTP/ALT</td>
                            <td>SGTP/ALT</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="background-color: #515151 !important; color: #fff;">Lipid Profle</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Cholesterol-Total Serum</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>CHOL/HDL RATIO</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>HDL Cholesterol Direct</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>HDL/LDL Cholesterol Ratio</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>LDL Cholesterol-Direct</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>LDL/HDL RATIO</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                Non-HDL Cholesterol Serum
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Triglycerides Serum</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>VLDL</td>
                        </tr>
                        <tr>
                            <td style="background-color: #515151 !important; color: #fff;">INR 450</td>
                            <td style="background-color: #515151 !important; color: #fff;">INR 799</td>
                        </tr>
                    </table>
                </div>
            </div>
        </header>
    </div>
    <a href="#!" class="closePopUpOutSide"></a>
</aside> -->
@endsection
