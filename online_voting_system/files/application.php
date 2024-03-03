<!-- Navbar start -->
<?php include('navbar.php') ?>
<!-- Navbar End -->

<div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container g-0 py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">Application</h1>
        </div>
        <form>
            <div class="row g-3 ">
                <!-- <div class="col-lg-2  wow slideInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: slideInUp;">
                </div> -->
                <div class="col-lg-12 wow slideInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                    <div class="row g-3">
                        <div class="col-3 ">
                            <label for="name" class="form-label  border-0  px-4">Name:</label>
                        </div>
                        <div class="col-3">
                            <input class="form-control border-0 bg-light px-4" type="tex" placeholder="Middle Name" style="height: 55px;">
                        </div>
                        <div class="col-3">
                            <input class="form-control border-0 bg-light px-4" type="text" placeholder="Last Name" style="height: 55px;">
                        </div>
                        <div class="col-3 px-1">
                            <input class="form-control border-0 bg-light px-4" type="text" placeholder="Last Name" style="height: 55px;">
                        </div>
                        <!--  -->
                        <div class="col-3">
                            <label for="personal" class="form-label border-0  px-4">Personal Details:</label>
                        </div>
                        <div class="col-3">
                            <input class="form-control border-0 bg-light px-4" type="date" placeholder="Enter Your DOB" style="height: 55px;">
                        </div>
                        <div class="col-3">
                            <input class="form-control border-0 bg-light px-4" type="number" pattern="[0-9]{10}" maxlength="10" placeholder="Enter Your Mobile No." style="height: 55px;">
                        </div>
                        <div class="col-3 px-1">
                            <input class="form-control border-0 bg-light px-4" type="email" placeholder="Enter Your Email ID" style="height: 55px;">
                        </div>
                        <!--  -->
                        <div class="col-3 ">
                            <label for="personal" class="form-label border-0  px-4">Profile Picture</label>
                        </div>

                        <div class="col-3">
                            <input class="form-control border-0 bg-light py-3" type="file" placeholder="Profile Photo" style="height: 55px;">
                        </div>

                        <div class="col-6 px-3 ">
                            <div class="row border-0 bg-light py-3 px-5 " style="height: 55px;">
                                <span class="col-md-3">
                                    <label class="form-label">Gender :</label>
                                </span>
                                <div class="col-9 px-4 ">
                                    <span class=" row ">
                                        <span class="col-4  form-check ">
                                            <input class="form-check-input " type="radio" name="gender" value="MALE" id="MALE">

                                            <label class="form-check-label " for="MALE"> MALE </label></span>
                                        <span class="col-4  form-check ">
                                            <input class="form-check-input" type="radio" name="gender" value="FEMALE" id="FEMALE">
                                            <label class="form-check-label" for="FEMALE"> FEMALE </label></span>

                                        <span class="col-4 form-check ">
                                            <input class="form-check-input" type="radio" name="gender" value="OTHER" id="OTHER">
                                            <label class="form-check-label" for="OTHER"> OTHER </label></span>
                                    </span>
                                </div>
                            </div>

                        </div>
                        <!--  -->
                        <div class="col-12">
                            <div class="row">
                                <div class="col-3">
                                    <label for="address" class="form-label  border-0  px-4">Address and Address Proof:</label>
                                </div>
                                <div class="col-9">
                                    <div class="row px-1" id="address">
                                        <div class="col-3 p-1">
                                            <select class="form-select bg-light border-0 " style="height: 55px;">
                                                <option selected disabled>Select Country</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-3 p-1">
                                            <select class="form-select bg-light border-0 " style="height: 55px;">
                                                <option selected disabled>Select District</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-3 p-1">
                                            <select class="form-select bg-light border-0 " style="height: 55px;">
                                                <option selected disabled>Select Tehsil</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <!-- <div class="col-3 p-1">
                                            <select class="form-select bg-light border-0 " style="height: 55px;">
                                                <option selected disabled>Select City/Village</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div> -->
                                        <div class="col-3 p-1">
                                            <input class="form-control border-0 bg-light px-4" type="text" placeholder="City/Village" style="height: 55px;">
                                        </div>
                                        <div class="col-4 p-1">
                                            <input class="form-control border-0 bg-light py-3" type="text" pattern="[0-9]{4}" maxlength="7" placeholder="Pin Code" style="height: 55px;">
                                        </div>
                                        <div class="col-4 p-1">
                                            <select class="form-select bg-light border-0 " style="height: 55px;">
                                                <option selected disabled>Select Document Type</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-4 p-1">
                                            <input class="form-control border-0 bg-light  py-3 px-1" type="file" placeholder="Profile Photo" style="height: 55px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-3">
                            <label for="address" class="form-label  border-0  px-4">ID Proof:</label>
                        </div>
                        <div class="col-6 px-2">
                            <div class="row">
                                <div class="col-6 p-1">
                                    <select class="form-select bg-light border-0 " style="height: 55px;">
                                        <option selected disabled>Select Document Type</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-6 p-1">
                                    <input class="form-control border-0 bg-light  py-3 px-1" type="file" placeholder="Profile Photo" style="height: 55px;">
                                </div>
                            </div>
                            <div class="row">
                                <small class="nav justify-content-end d-flex text-dark">(In case educated 10th marks/latter certified by school*.)</small>
                            </div>
                        </div>
                        <div class="col-3 px-3 pt-1 mb-1">
                            <div class="row ">
                                <div class="col-12 bg-light border-0 py-3">
                                    <input class="form-check-input " type="checkbox" name="untutored" value="untutored" id="untutored">
                                    <label class="form-check-label " for="untutored">Untutored </label>
                                </div>
                            </div>
                            <div class="row">
                                <small class="nav justify-content-end d-flex text-dark">(In case untutored select*.)</small>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-lg-12 text-center position-relative p-3 my-3 mx-auto">
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