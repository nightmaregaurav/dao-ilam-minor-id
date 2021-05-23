<div class="container my-5">
	<div class="container">
        <div class="row">
            <div class="col-md">
                <div class="mb-3">
                    <label class="mx-1 form-label">Minor ID No:</label>
                    <label class="mx-1 form-label"><?php echo $id_details['minor_id_no_en'] ?></label>
                </div>
                <div class="mb-3">
                    <label class="mx-1 form-label">ना.बा.प्र.नं.:</label>
                    <label class="mx-1 form-label"><?php echo $id_details['minor_id_no_ne'] ?></label>
                </div>
                <label style="font-weight: bolder;">Personal details(ब्यक्तिगत बिबरण):</label>
                <div class="ml-5 mb-3">
                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">Name surname:</label>
                        <label class="mx-1 form-label"><?php echo $id_details['name_surname_en'] ?></label>
                    </div>
                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">नाम थर:</label>
                        <label class="mx-1 form-label"><?php echo $id_details['name_surname_ne'] ?></label>
                    </div>

                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">Gender(लिङ्ग): </label>
                        <label class="mx-1 form-label"><?php echo $id_details['gender'] ?></label>
                    </div>

                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">Name surname of Father:</label>
                        <label class="mx-1 form-label"><?php echo $id_details['name_surname_father_en'] ?></label>
                    </div>

                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">बाबुको नाम थर:</label>
                        <label class="mx-1 form-label"><?php echo $id_details['name_surname_father_ne'] ?></label>
                    </div>

                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">Address of Father:</label>
                        <label class="mx-1 form-label"><?php echo $id_details['address_father_en'] ?></label>
                    </div>

                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">बाबुको नाम ठेगाना:</label>
                        <label class="mx-1 form-label"><?php echo $id_details['address_father_ne'] ?></label>
                    </div>

                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">Name surname of Mother:</label>
                        <label class="mx-1 form-label"><?php echo $id_details['name_surname_mother_en'] ?></label>
                    </div>

                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">आमाको नाम थर:</label>
                        <label class="mx-1 form-label"><?php echo $id_details['name_surname_mother_ne'] ?></label>
                    </div>

                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">Address of Mother:</label>
                        <label class="mx-1 form-label"><?php echo $id_details['address_mother_en'] ?></label>
                    </div>

                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">आमाको नाम ठेगाना:</label>
                        <label class="mx-1 form-label"><?php echo $id_details['address_mother_ne'] ?></label>
                    </div>

                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">Citizenship No. of Father or Mother:</label>
                        <label class="mx-1 form-label"><?php echo $id_details['ctzn_en'] ?></label>
                    </div>

                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">बाबु वा आमाको नागरिकता नं.:</label>
                        <label class="mx-1 form-label"><?php echo $id_details['ctzn_ne'] ?></label>
                    </div>

                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">Name/Address of Guardian:</label>
                        <label class="mx-1 form-label"><?php echo $id_details['name_add_guardian_en'] ?></label>
                    </div>

                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">संरक्षकको नाम/ठेगाना:</label>
                        <label class="mx-1 form-label"><?php echo $id_details['name_add_guardian_ne'] ?></label>
                    </div>
                </div>

            </div>
            <div class="col-md">
                <label style="font-weight: bolder;">Birth details(जन्म बिबरण):</label>
                <div class="ml-5 mb-3">
                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">Birth date:</label>
                        <label class="mx-1 form-label"><?php echo $id_details['birth_date_en'] ?></label>
                    </div>

                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">जन्म मिति:</label>
                        <label class="mx-1 form-label"><?php echo $id_details['birth_date_ne'] ?></label>
                    </div>

                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">Birth Place:</label>
                        <label class="mx-1 form-label"><?php echo $id_details['birth_place_en'] ?></label>
                    </div>

                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">जन्म स्थान:</label>
                        <label class="mx-1 form-label"><?php echo $id_details['birth_place_ne'] ?></label>
                    </div>

                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">District(जिल्ला):</label>
                        <label class="mx-1 form-label"><?php echo $id_details['birth_dist_eng'].' | '.$id_details['birth_dist_nep'] ?></label>
                    </div>

                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">Metropolis/Municipality/V.D.C(म.न.पा./न.पा./गा.पा):</label>
                        <label class="mx-1 form-label"><?php echo $id_details['birth_muni_name_eng'].' | '.$id_details['birth_muni_name_nep'] ?></label>
                    </div>

                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">Ward(वडा नं):</label>
                        <label class="mx-1 form-label"><?php echo $id_details['birth_ward'] ?></label>
                    </div>
                </div>

                <label style="font-weight: bolder;">Permanent Address details(स्थाई ठेगाना बिबरण):</label>
            
                <div class="ml-5 mb-3">
                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">Permanent Address:</label>
                        <label class="mx-1 form-label"><?php echo $id_details['place_en'] ?></label>
                    </div>

                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">स्थाई ठेगाना:</label>
                        <label class="mx-1 form-label"><?php echo $id_details['place_ne'] ?></label>
                    </div>

                    
                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">District(जिल्ला):</label>
                        <label class="mx-1 form-label"><?php echo $id_details['dist_eng'].' | '.$id_details['dist_nep'] ?></label>
                    </div>

                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">Metropolis/Municipality/V.D.C(म.न.पा./न.पा./गा.पा):</label>
                        <label class="mx-1 form-label"><?php echo $id_details['muni_name_eng'].' | '.$id_details['muni_name_nep'] ?></label>
                    </div>

                    <div class="mb-3">
                        <label class="mx-1 form-label" style="font-weight: bolder;">Ward(वडा नं):</label>
                        <label class="mx-1 form-label"><?php echo $id_details['ward'] ?></label>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row mb-3">
            <div class="col-md">
                <div class="mb-3">
                    <label class="mx-1 form-label" style="font-weight: bolder;">Officer's name:</label>
                    <label class="mx-1 form-label"><?php echo $id_details['officer_name_en'] ?></label>
                </div>

                <div class="mb-3">
                    <label class="mx-1 form-label" style="font-weight: bolder;">Officer's position:</label>
                    <label class="mx-1 form-label"><?php echo $id_details['officer_pos_en'] ?></label>
                </div>
            </div>
            <div class="col-md">
                <div class="mb-3">
                    <label class="mx-1 form-label" style="font-weight: bolder;">अधिकारीको नाम थर:</label>
                    <label class="mx-1 form-label"><?php echo $id_details['officer_name_ne'] ?></label>
                </div>

                <div class="mb-3">
                    <label class="mx-1 form-label" style="font-weight: bolder;">अधिकारीको पद:</label>
                    <label class="mx-1 form-label"><?php echo $id_details['officer_pos_ne'] ?></label>
                </div>
            </div>
        </div>

        <iframe src="/print.php?id=<?php echo $id_details['id'] ?>" style="display: none;" id='print_frame'></iframe>

        <div class="row">
            <div class="mb-3 d-flex flex-row flex-wrap justify-content-center col-12">
                <a class="btn btn-primary m-1" href="/update.php?id=<?php echo $id_details['id'] ?>">Update (परिवर्तन गर्ने)</a>
                <button class="btn btn-success m-1" onclick="print_doc(this);">Print (प्रकासित गर्ने)</button>
                <button class="btn btn-danger m-1" onclick="delete_doc(this);">Delete (बिबरण हटाउने)</button>
            </div>
        </div>
    </div>
</div>