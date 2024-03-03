<!-- Navbar start -->
<?php include('navbar.php') ?>
<!-- Navbar End -->

<div class=" py-3 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container  g-0 py-5 px-2 container-fluid ">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">Candidate Form</h1>
        </div>
        <form>
            <div class="row g-3 ">
                <!-- 
                    border border-1
                <div class="col-lg-2  wow slideInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: slideInUp;">
                </div> -->
                <div class="col-lg-12 wow slideInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                    <div class="row g-3">
                        <div class="col-3 px-1 ">
                            <label for="name" class="form-label  border-0  px-4">Name:</label>
                        </div>
                        <div class="col-3 px-1">
                            <input class="form-control border-0 bg-light px-4" type="tex" placeholder="Official Name" style="height: 55px;">
                        </div>
                        <div class="col-3 px-3">
                            <div class="row px-1">
                                <input class="form-control border-0 bg-light px-4" type="text" placeholder="Famous Name" style="height: 55px;">
                            </div>
                            <div class="row px-1">
                                <small class="nav justify-content-end d-flex text-info">[EX. Official Name(Famous Name)]</small>
                            </div>
                        </div>
                        <div class="col-3">
                            <!-- <div class="row px-1">
                                <label for="candidate_photo" class="form-label  border-0 justify-content-start d-flex text-mute">Election Photo</label>
                            </div> -->
                            <div class="row px-1">
                                <input class="form-control border-0 bg-light py-3" id="candidate_photo" type="file" placeholder=" Election Photo" style="height: 55px;">
                            </div>
                            <div class="row px-1">
                                <small class="nav justify-content-end d-flex text-info">[Photo for publishing among public]</small>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-3 ">
                            <label for="Election Campaign" class="form-label border-0  px-4">Election Details:</label>
                        </div>
                        <div class="col-3 px-1">
                            <select class="form-select bg-light border-0 " style="height: 55px;">
                                <option selected disabled>Select Party</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-3 px-1">
                            <select class="form-select bg-light border-0 " style="height: 55px;">
                                <option selected disabled>Select Post</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <input class="form-control border-0 bg-light px-4" type="text" placeholder="Slogan" style="height: 55px;">
                        </div>
                        <!--  -->
                        <!--  -->
                        <div class="col-3 py-1">
                            <label for="Info_for_Approving" class="form-label  border-0  px-4">Info for Backend Team:*</label>
                        </div>
                        <div class="col-6 py-1 px-2" id="Info_for_Approving">
                            <div class="row">
                                <div class="col-6">
                                    <div class="row px-1">
                                        <label for="doc_type" class="form-label  border-0 justify-content-start d-flex text-mute">Party/ID Proof</label>
                                    </div>
                                    <div class="row px-1">
                                        <select id="doc_type" class="form-select bg-light border-0 " style="height: 55px;">
                                            <option selected disabled>Select Document Type</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <option value="3">Party/ID Proof</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 ">
                                    <div class="row px-1">
                                        <label for="proof_candidate" class="form-label  border-0 justify-content-start d-flex text-mute">selected Document</label>
                                    </div>
                                    <div class="row px-1">
                                        <input class="form-control border-0 bg-light  py-3 px-1" id="proof_candidate" type="file" placeholder="proof" style="height: 55px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 py-1">
                            <div class="row px-1">
                                <label for="Election_Motive" class="form-label  border-0 justify-content-start d-flex text-mute">What kind of motive(Video & latter)</label>
                            </div>
                            <div class="row px-2">
                                <input class="form-control border-0 bg-light py-3" id="Election_Motive" type="file" placeholder="What kind of motive " style="height: 55px;">
                            </div>
                        </div>
                        <!--  -->
                        <!--  -->
                        <br>
                        <div class="col-12 py-1">
                            <div class="row">
                                <div class="col-3 ">
                                    <label for="Election_Campaign_Details" class="form-label border-0  px-4">Election Campaign Details</label>
                                </div>
                                <div class="col-9">
                                    <div class="row px-1" id="Election_Campaign_Details">
                                        <div class="col-4">
                                            <div class="row">
                                                <label for="poster" class="form-label  border-0 justify-content-Start d-flex text-mute">Election Poster</label>
                                            </div>
                                            <div class="row">
                                                <input class="form-control border-0 bg-light py-3" id="poster" type="file" placeholder=" Election Poster" style="height: 55px;">

                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="row px-1">
                                                <label for="logo" class="form-label  border-0 justify-content-start d-flex text-mute">Election Logo</label>
                                            </div>
                                            <div class="row px-1">
                                                <input class="form-control border-0 bg-light py-3" id="logo" type="file" placeholder=" Election logo" style="height: 55px;">
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="row px-1">
                                                <label for="speech" class="form-label  border-0 justify-content-start d-flex text-mute">Election Video Speech</label>
                                            </div>
                                            <div class="row px-1">
                                                <input class="form-control border-0 bg-light py-3" id="speech" type="file" placeholder=" Election Photo" style="height: 55px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-12">                            
                            <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Appeal/Message/Why will vote you/Say something..."></textarea>
                        </div>
                        <!--  -->

                        <!-- <div class="row">
                            <div class="col-lg-3 offset-6 p-3 my-3 position-relative">
                                <button class="btn btn-primary w-100 py-3" type="submit" style="max-width:250px; max-height:80px;">Submit</button>
                            </div>
                        </div> -->
                        <div class="col-lg-12 text-center position-relative p-3 my-2 mx-auto">
                            <button class="btn btn-primary w-100 py-3" type="submit" style="max-width:250px; max-height: 80px;">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- <div class="col-lg-3 wow slideInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: slideInUp;">
            </div> -->
</div>

<!-- Footer & JavaScript Libraries start  -->
<?php include('footer.php') ?>
<!-- Footer & JavaScript Libraries End  -->