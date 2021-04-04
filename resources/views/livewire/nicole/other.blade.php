<div>
    <div class="content-page">
        <div class="content">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Nicole</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Covid 19 </a></li>
                                <li class="breadcrumb-item active">Other Details</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Other Details</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <!-- Checkout Steps -->
                            <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                                <li class="nav-item">
                                    <a href="#payment-information" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                                        <i class="mdi mdi-hospital-box-outline font-18"></i>
                                        <span class="d-none d-lg-block">Covid 19 Symptoms</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#billing-information" data-toggle="tab" aria-expanded="false"
                                       class="nav-link rounded-0">
                                        <i class="mdi mdi-virus-outline font-18"></i>
                                        <span class="d-none d-lg-block">Covid 19 Prevention</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#shipping-information" data-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                        <i class="mdi mdi-thermometer-lines font-18"></i>
                                        <span class="d-none d-lg-block">Covid 19 Vaccination</span>
                                    </a>
                                </li>

                            </ul>

                            <!-- Steps Information -->
                            <div class="tab-content">
                                <!-- Payment Content-->
                                <div class="tab-pane active" id="payment-information">
                                    <div class="row">

                                        <div class="col-lg-8">
                                            <!-- Credit/Debit Card box-->
                                            <div>
                                                @if (session()->has('error'))
                                                    <div class="alert alert-danger">
                                                        {{ session('error') }}
                                                    </div>
                                                @endif
                                            </div>

                                            <div>
                                                @if (session()->has('message'))
                                                    <div class="alert alert-success">
                                                        {{ session('message') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="border p-3 mb-3 rounded">
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="BillingOptRadio1" name="billingOptions" class="custom-control-input" checked>
                                                            <label class="custom-control-label font-16 font-weight-bold" for="BillingOptRadio1">Covid 19 Symptoms</label>
                                                        </div>
                                                        <p class="mb-0 pl-3 pt-1">Note this list include some of the symptoms but there are others that might not appear on the list</p>
                                                    </div>

                                                </div>

                                                <div class="row mt-4">
                                                    <div class="list-group">
                                                        <a href="#" class="list-group-item list-group-item-action active">
                                                            Covid Symptoms
                                                        </a>
                                                        <ul class="list-group list-group-horizontal">
                                                            <li class="list-group-item"><a href="https://www.cdc.gov/coronavirus/2019-ncov/symptoms-testing/symptoms.html" >Fever or chills</a></li>
                                                            <li class="list-group-item">Cough</li>
                                                            <li class="list-group-item">Fatigue</li>
                                                        </ul>

                                                        <!-- Responsive Small -->
                                                        <ul class="list-group list-group-horizontal-sm">
                                                            <li class="list-group-item">Shortness of breath or difficulty breathing</li>

                                                        </ul>

                                                        <!-- Responsive Medium -->
                                                        <ul class="list-group list-group-horizontal-md">
                                                            <li class="list-group-item">Muscle or body aches</li>
                                                            <li class="list-group-item">Headache</li>

                                                        </ul>

                                                        <!-- Responsive Large -->
                                                        <ul class="list-group list-group-horizontal-lg">
                                                            <li class="list-group-item">New loss of taste or smell</li>

                                                        </ul>

                                                        <ul class="list-group list-group-horizontal-lg">
                                                            <li class="list-group-item">Sore throat</li>
                                                            <li class="list-group-item">Nausea or vomiting</li>

                                                        </ul>

                                                        <ul class="list-group list-group-horizontal-lg">
                                                            <li class="list-group-item">Diarrhea</li>
                                                            <li class="list-group-item">Congestion or runny nose
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>


                                            </div>




                                        </div> <!-- end col -->

                                        <div class="col-lg-4">
                                            <div class="card cta-box">
                                                <div class="card-body">
                                                    <div class="border p-3 mt-4 mt-lg-0 rounded">
                                                        <h4 class="header-title mb-3">WHAT IS COVID-19 & ITS SYMPTOMS: Source-WHO</h4>
                                                    </div>

                                                    <div class="mt-3 mr-5">
                                                        <div class="ratio ratio-1x1">
                                                            <iframe width="300" height="300" src="https://www.youtube.com/embed/i0ZabxXmH4Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card text-white bg-primary overflow-hidden">
                                                <div class="card-body">
                                                    <div class="toll-free-box text-center">
                                                        <h4> <i class="mdi mdi-deskphone"></i>Help Line : 2023 / 2019</h4>
                                                    </div>
                                                </div> <!-- end card-body-->
                                            </div>

                                        </div> <!-- end col -->
                                    </div> <!-- end row-->
                                </div>
                                <!-- End Payment Information Content-->


                                <!-- Billing Content-->
                                <div class="tab-pane" id="billing-information">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="text-center">
                                                        <h3 class="">Preventative Measures against covid-19</h3>
                                                        <a  href="https://www.cdc.gov/coronavirus/2019-ncov/prevent-getting-sick/prevention.html" target="_blank" class="btn btn-success btn-sm mt-2"><i class="mdi mdi-eye-outline me-1"></i> view more</a>
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->

                                            <div class="row pt-5 pb-3">
                                                <div class="col-lg-5 offset-lg-1">
                                                    <!-- Question/Answer -->
                                                    <div>
                                                        <div class="faq-question-q-box">1.</div>
                                                        <h4 class="faq-question" data-wow-delay=".1s">Wear a mask</h4>
                                                        <p class="faq-answer mb-4">Everyone 2 years and older should wear masks in public.
                                                            Masks should be worn in addition to staying at least 6 feet apart, especially around people who don’t live with you.
                                                            If someone in your household is infected, people in the household should take precautions including wearing masks to avoid spread to others.
                                                            Wash your hands or use hand sanitizer before putting on your mask.
                                                            Wear your mask over your nose and mouth and secure it under your chin.
                                                           </p>
                                                    </div>

                                                    <!-- Question/Answer -->
                                                    <div>
                                                        <div class="faq-question-q-box">2.</div>
                                                        <h4 class="faq-question">Stay 6 feet away from others</h4>
                                                        <p class="faq-answer mb-4">Inside your home: Avoid close contact with people who are sick.
                                                            If possible, maintain 6 feet between the person who is sick and other household members.
                                                            Outside your home: Put 6 feet of distance between yourself and people who don’t live in your household</p>
                                                    </div>

                                                    <!-- Question/Answer -->
                                                    <div>
                                                        <div class="faq-question-q-box">3.</div>
                                                        <h4 class="faq-question">Get Vaccinated</h4>
                                                        <p class="faq-answer mb-4">Authorized COVID-19 vaccines can help protect you from COVID-19.
                                                            You should get a COVID-19 vaccine when it is available to you.
                                                            Once you are fully vaccinated, you may be able to start doing some things that you had stopped doing because of the pandemic</p>
                                                    </div>

                                                    <!-- Question/Answer -->
                                                    <div>
                                                        <div class="faq-question-q-box">4.</div>
                                                        <h4 class="faq-question" data-wow-delay=".1s">Avoid crowds and poorly ventilated spaces</h4>
                                                        <p class="faq-answer mb-4">Being in crowds like in restaurants, bars, fitness centers, or movie theaters puts you at higher risk for COVID-19.
                                                            Avoid indoor spaces that do not offer fresh air from the outdoors as much as possible.
                                                            If indoors, bring in fresh air by opening windows and doors, if possible</p>
                                                    </div>

                                                </div>
                                                <!--/col-md-5 -->

                                                <div class="col-lg-5">
                                                    <!-- Question/Answer -->
                                                    <div>
                                                        <div class="faq-question-q-box">5</div>
                                                        <h4 class="faq-question">Wash your hands often</h4>
                                                        <p class="faq-answer mb-4">Wash your hands often with soap and water for at least 20 seconds especially after you have been in a public place, or after blowing your nose, coughing, or sneezing.
                                                            It’s especially important to wash:
                                                            -Before eating or preparing food
                                                            -Before touching your face
                                                            -After using the restroom
                                                            -After leaving a public place
                                                            -After blowing your nose, coughing, or sneezing
                                                            -After handling your mask
                                                            -After changing a diaper
                                                            -After caring for someone sick
                                                            -After touching animals or pets.
                                                            If soap and water are not readily available, use a hand sanitizer that contains at least 60% alcohol. Cover all surfaces of your hands and rub them together until they feel dry.</p>
                                                    </div>

                                                    <!-- Question/Answer -->
                                                    <div>
                                                        <div class="faq-question-q-box">6.</div>
                                                        <h4 class="faq-question">Cover coughs and sneezes</h4>
                                                        <p class="faq-answer mb-4">Always cover your mouth and nose with a tissue when you cough or sneeze or use the inside of your elbow and do not spit.
                                                            Throw used tissues in the trash.
                                                            Immediately wash your hands with soap and water for at least 20 seconds. If soap and water are not readily available, clean your hands with a hand sanitizer that contains at least 60% alcohol.</p>
                                                    </div>

                                                    <!-- Question/Answer -->
                                                    <div>
                                                        <div class="faq-question-q-box">7.</div>
                                                        <h4 class="faq-question">Clean and disinfect</h4>
                                                        <p class="faq-answer mb-4">Clean AND disinfect frequently touched surfaces daily. This includes tables, doorknobs, light switches, countertops, handles, desks, phones, keyboards, toilets, faucets, and sinks.
                                                            If surfaces are dirty, clean them. Use detergent or soap and water prior to disinfection.
                                                            Then, use a household disinfectant. Use products from EPA’s List N: Disinfectants for Coronavirus (COVID-19)external icon according to manufacturer’s labeled directions.</p>
                                                    </div>

                                                    <!-- Question/Answer -->


                                                </div>
                                                <!--/col-md-5-->
                                            </div>
                                            <!-- end row -->


                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card cta-box">
                                                <div class="card-body">
                                                    <div class="border p-3 mt-4 mt-lg-0 rounded">
                                                        <h4 class="header-title mb-3">Covid 19 Prevention Tips: Source John Hopkins</h4>

                                                    </div>

                                                    <div class="mt-3 mr-5">
                                                        <div class="ratio ratio-1x1">
                                                            <iframe width="300" height="300" src="https://www.youtube.com/embed/xVu_I6WCsto" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="card text-white bg-primary overflow-hidden">
                                                <div class="card-body">
                                                    <div class="toll-free-box text-center">
                                                        <h4> <i class="mdi mdi-deskphone"></i> For Support : 2023 / 2019</h4>
                                                    </div>
                                                </div> <!-- end card-body-->
                                            </div>

                                        </div> <!-- end col -->
                                    </div> <!-- end row-->
                                </div>
                                <!-- End Billing Information Content-->

                                <!-- Shipping Content-->
                                <div class="tab-pane" id="shipping-information">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="clearfix"></div>

                                            <h3 class="mt-3">Understanding How COVID-19 Vaccines Work</h3>
                                            <h5 class="mt-3">The Immune System—the Body’s Defense Against Infection</h5>
                                            <p class="text-muted mb-4">
                                                To understand how COVID-19 vaccines work, it helps to first look at how our bodies fight illness. When germs, such as the virus that causes COVID-19, invade our bodies, they attack and multiply. This invasion, called an infection, is what causes illness. Our immune system uses several tools to fight infection. Blood contains red cells, which carry oxygen to tissues and organs, and white or immune cells, which fight infection. Different types of white blood cells fight infection in different ways:
                                            </p>
                                            <ul>
                                                <li><b>Macrophages</b> are white blood cells that swallow up and digest germs and dead or dying cells. The macrophages leave behind parts of the invading germs, called “antigens”. The body identifies antigens as dangerous and stimulates antibodies to attack them.</li>
                                                <li><b>B-lymphocytes</b> are defensive white blood cells. They produce antibodies that attack the pieces of the virus left behind by the macrophages.</li>
                                                <li><b>T-lymphocytes</b> are another type of defensive white blood cell. They attack cells in the body that have already been infected.</li>
                                            </ul>

                                            <p class="text-muted mb-4">The first time a person is infected with the virus that causes COVID-19, it can take several days or weeks for their body to make and use all the germ-fighting tools needed to get over the infection. After the infection, the person’s immune system remembers what it learned about how to protect the body against that disease.
                                       The body keeps a few T-lymphocytes, called “memory cells”, that go into action quickly if the body encounters the same virus again. When the familiar antigens are detected, B-lymphocytes produce antibodies to attack them. Experts are still learning how long these memory cells protect a person against the virus that causes COVID-19.</p>



                                            <h5 class="mt-3">How COVID-19 Vaccines Work</h5>
                                            <p class="text-muted mb-4">
                                                COVID-19 vaccines help our bodies develop immunity to the virus that causes COVID-19 without us having to get the illness. Different types of vaccines work in different ways to offer protection. But with all types of vaccines, the body is left with a supply of “memory” T-lymphocytes as well as B-lymphocytes that will remember how to fight that virus in the future.

                                                It typically takes a few weeks after vaccination for the body to produce T-lymphocytes and B-lymphocytes. Therefore, it is possible that a person could be infected with the virus that causes COVID-19 just before or just after vaccination and then get sick because the vaccine did not have enough time to provide protection.

                                                Sometimes after vaccination, the process of building immunity can cause symptoms, such as fever. These symptoms are normal and are signs that the body is building immunity.
                                            </p>

                                            <h5 class="mt-3">Types of Vaccines</h5>
                                            <p class="text-muted mb-4">Currently, there are three main types of COVID-19 vaccines that are authorized and recommended, or undergoing large-scale (Phase 3) clinical trials in the United States. Below is a description of how each type of vaccine prompts our bodies to recognize and protect us from the virus that causes COVID-19. None of these vaccines can give you COVID-19.</p>
                                            <ul>
                                                <li><b><a href="https://www.cdc.gov/coronavirus/2019-ncov/vaccines/different-vaccines/mRNA.html" target="_blank">mRNA vaccines</a></b> contain material from the virus that causes COVID-19 that gives our cells instructions for how to make a harmless protein that is unique to the virus. After our cells make copies of the protein, they destroy the genetic material from the vaccine. Our bodies recognize that the protein should not be there and build T-lymphocytes and B-lymphocytes that will remember how to fight the virus that causes COVID-19 if we are infected in the future.</li>
                                                <li><b>Protein subunit vaccines</b> Protein subunit vaccines include harmless pieces (proteins) of the virus that causes COVID-19 instead of the entire germ. Once vaccinated, our bodies recognize that the protein should not be there and build T-lymphocytes and antibodies that will remember how to fight the virus that causes COVID-19 if we are infected in the future.</li>
                                                <li><b><a href="https://www.cdc.gov/coronavirus/2019-ncov/vaccines/different-vaccines/viralvector.html">Vector vaccines</a></b> contain a modified version of a different virus than the one that causes COVID-19. Inside the shell of the modified virus, there is material from the virus that causes COVID-19. This is called a “viral vector.” Once the viral vector is inside our cells, the genetic material gives cells instructions to make a protein that is unique to the virus that causes COVID-19. Using these instructions, our cells make copies of the protein. This prompts our bodies to build T-lymphocytes and B-lymphocytes that will remember how to fight that virus if we are infected in the future.</li>
                                            </ul>

                                            <h5 class="mt-3">Some COVID-19 Vaccines Require More Than One Shot</h5>
                                            <p class="text-muted mb-4">To be fully vaccinated, you will need two shots of some COVID-19 vaccines.</p>
                                            <ul>
                                                <li>If you get a COVID-19 vaccine that requires two shots, you are considered fully vaccinated two weeks after your second shot. Pfizer-BioNTech and Moderna COVID-19 vaccines require two shots.</li>
                                                <li>If you get a COVID-19 vaccine that requires one shot, you are considered fully vaccinated two weeks after your shot. Johnson & Johnson’s Janssen COVID-19 vaccine only requires one shot.</li>
                                            </ul>

                                            <p class="text-muted mb-4">If it has been less than two weeks since your shot, or if you still need to get your second shot, you are NOT fully protected. Keep taking all prevention steps until you are fully vaccinated (two weeks after your final shot).</p>

                                            <!-- end sub tasks/checklists -->


                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card cta-box">
                                                <div class="card-body">
                                                    <div class="border p-3 mt-4 mt-lg-0 rounded">
                                                        <h4 class="header-title mb-3">Vaccinations : Source Gavi, the Vaccine Alliance</h4>
                                                    </div>


                                                    <div class="mt-3 mr-5">
                                                        <div class="ratio ratio-1x1">
                                                            <iframe width="300" height="300" src="https://www.youtube.com/embed/lFjIVIIcCvc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="card text-white bg-primary overflow-hidden">
                                                <div class="card-body">
                                                    <div class="toll-free-box text-center">
                                                        <h4> <i class="mdi mdi-deskphone"></i> For Support : 2023 / 2019</h4>
                                                    </div>
                                                </div> <!-- end card-body-->
                                            </div>

                                        </div> <!-- end col -->
                                    </div> <!-- end row-->
                                </div>
                                <!-- End Shipping Information Content-->


                            </div> <!-- end tab content-->

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row-->

        </div> <!-- End Content -->

    </div>
