<main class="my-5 py-5">
    <div class="container">
        <form method="post" action="">
            <div class="row">
                <div class="col-md">
                    <div class="mb-3">
                        <label for="minor_id_no_en" class="form-label">Minor ID No:</label>
                        <input type="text" class="form-control" id="minor_id_no_en" name="minor_id_no_en" required="required"<?php if(isset($minor_id_no_en)){echo ' value="'.$minor_id_no_en.'"';} ?>>
                    </div>
                    <div class="mb-3">
                        <label for="minor_id_no_ne" class="form-label">ना.बा.प्र.नं.:</label>
                        <input type="text" class="form-control" id="minor_id_no_ne" name="minor_id_no_ne" required="required"<?php if(isset($minor_id_no_ne)){echo ' value="'.$minor_id_no_ne.'"';} ?>>
                    </div>
                    <label for="name_surname_en" style="font-weight: bolder;">Personal details(ब्यक्तिगत बिबरण):</label>
                    <div class="ml-5 mb-3">
                        <div class="mb-3">
                            <label for="name_surname_en" class="form-label">Name surname:</label>
                            <input type="text" class="form-control" id="name_surname_en" name="name_surname_en" required="required"<?php if(isset($name_surname_en)){echo ' value="'.$name_surname_en.'"';} ?>>
                        </div>
                        <div class="mb-3">
                            <label for="name_surname_ne" class="form-label">नाम थर:</label>
                            <input type="text" class="form-control" id="name_surname_ne" name="name_surname_ne" required="required"<?php if(isset($name_surname_ne)){echo ' value="'.$name_surname_ne.'"';} ?>>
                        </div>

                        <label for="gender_male">Gender(लिङ्ग): </label>
                        <div class="ml-5 mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="male" id="gender_male" <?php if(isset($gender)){if($gender=='male'){echo 'checked';}} ?>>
                                <label class="form-check-label" for="gender_male">Male | पुरुस</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="female" id="gender_female" <?php if(isset($gender)){if($gender=='female'){echo 'checked';}} ?>>
                                <label class="form-check-label" for="gender_female">Female | महिला</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="others" id="gender_others" <?php if(isset($gender)){if($gender=='others'){echo 'checked';}} ?>>
                                <label class="form-check-label" for="gender_others">Others | ‍अन्य</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="name_surname_father_en" class="form-label">Name surname of Father:</label>
                            <input type="text" class="form-control" id="name_surname_father_en" name="name_surname_father_en" required="required"<?php if(isset($name_surname_father_en)){echo ' value="'.$name_surname_father_en.'"';} ?>>
                        </div>

                        <div class="mb-3">
                            <label for="name_surname_father_ne" class="form-label">बाबुको नाम थर:</label>
                            <input type="text" class="form-control" id="name_surname_father_ne" name="name_surname_father_ne" required="required"<?php if(isset($name_surname_father_ne)){echo ' value="'.$name_surname_father_ne.'"';} ?>>
                        </div>

                        <div class="mb-3">
                            <label for="address_father_en" class="form-label">Address of Father:</label>
                            <input type="text" class="form-control" id="address_father_en" name="address_father_en" required="required"<?php if(isset($address_father_en)){echo ' value="'.$address_father_en.'"';} ?>>
                        </div>

                        <div class="mb-3">
                            <label for="address_father_ne" class="form-label">बाबुको नाम ठेगाना:</label>
                            <input type="text" class="form-control" id="address_father_ne" name="address_father_ne" required="required"<?php if(isset($address_father_ne)){echo ' value="'.$address_father_ne.'"';} ?>>
                        </div>

                        <div class="mb-3">
                            <label for="name_surname_mother_en" class="form-label">Name surname of Mother:</label>
                            <input type="text" class="form-control" id="name_surname_mother_en" name="name_surname_mother_en" required="required"<?php if(isset($name_surname_mother_en)){echo ' value="'.$name_surname_mother_en.'"';} ?>>
                        </div>

                        <div class="mb-3">
                            <label for="name_surname_mother_ne" class="form-label">आमाको नाम थर:</label>
                            <input type="text" class="form-control" id="name_surname_mother_ne" name="name_surname_mother_ne" required="required"<?php if(isset($name_surname_mother_ne)){echo ' value="'.$name_surname_mother_ne.'"';} ?>>
                        </div>

                        <div class="mb-3">
                            <label for="address_mother_en" class="form-label">Address of Mother:</label>
                            <input type="text" class="form-control" id="address_mother_en" name="address_mother_en" required="required"<?php if(isset($address_mother_en)){echo ' value="'.$address_mother_en.'"';} ?>>
                        </div>

                        <div class="mb-3">
                            <label for="address_mother_ne" class="form-label">आमाको नाम ठेगाना:</label>
                            <input type="text" class="form-control" id="address_mother_ne" name="address_mother_ne" required="required"<?php if(isset($address_mother_ne)){echo ' value="'.$address_mother_ne.'"';} ?>>
                        </div>

                        <div class="mb-3">
                            <label for="ctzn_en" class="form-label">Citizenship No. of Father or Mother:</label>
                            <input type="text" class="form-control" id="ctzn_en" name="ctzn_en" required="required"<?php if(isset($ctzn_en)){echo ' value="'.$ctzn_en.'"';} ?>>
                        </div>

                        <div class="mb-3">
                            <label for="ctzn_ne" class="form-label">बाबु वा आमाको नागरिकता नं.:</label>
                            <input type="text" class="form-control" id="ctzn_ne" name="ctzn_ne" required="required"<?php if(isset($ctzn_ne)){echo ' value="'.$ctzn_ne.'"';} ?>>
                        </div>

                        <div class="mb-3">
                            <label for="name_add_guardian_en" class="form-label">Name/Address of Guardian:</label>
                            <input type="text" class="form-control" id="name_add_guardian_en" name="name_add_guardian_en" required="required"<?php if(isset($name_add_guardian_en)){echo ' value="'.$name_add_guardian_en.'"';} ?>>
                        </div>

                        <div class="mb-3">
                            <label for="name_add_guardian_ne" class="form-label">संरक्षकको नाम/ठेगाना:</label>
                            <input type="text" class="form-control" id="name_add_guardian_ne" name="name_add_guardian_ne" required="required"<?php if(isset($name_add_guardian_ne)){echo ' value="'.$name_add_guardian_ne.'"';} ?>>
                        </div>
                    </div>

                </div>
                <div class="col-md">
                    <label for="birth_date_en" style="font-weight: bolder;">Birth details(जन्म बिबरण):</label>
                    <div class="ml-5 mb-3">
                        <div class="mb-3">
                            <label for="birth_date_en" class="form-label">Birth date:</label>
                            <input type="text" class="form-control" id="birth_date_en" name="birth_date_en" required="required"<?php if(isset($birth_date_en)){echo ' value="'.$birth_date_en.'"';} ?>>
                        </div>

                        <div class="mb-3">
                            <label for="birth_date_ne" class="form-label">जन्म मिति:</label>
                            <input type="text" class="form-control" id="birth_date_ne" name="birth_date_ne" required="required"<?php if(isset($birth_date_ne)){echo ' value="'.$birth_date_ne.'"';} ?>>
                        </div>

                        <div class="mb-3">
                            <label for="birth_place_en" class="form-label">Birth Place:</label>
                            <input type="text" class="form-control" id="birth_place_en" name="birth_place_en" required="required"<?php if(isset($birth_place_en)){echo ' value="'.$birth_place_en.'"';} ?>>
                        </div>

                        <div class="mb-3">
                            <label for="birth_place_ne" class="form-label">जन्म स्थान:</label>
                            <input type="text" class="form-control" id="birth_place_ne" name="birth_place_ne" required="required"<?php if(isset($birth_place_ne)){echo ' value="'.$birth_place_ne.'"';} ?>>
                        </div>

                        <div class="mb-3">
                            <label for="birth_district" class="form-label">District(जिल्ला):</label>
                            <select class="form-select" name="birth_district" id="birth_district" onchange="birth_district_changed(this);" onclick="birth_district_changed(this);">
                                <option value='NaN'selected>Open this select menu</option>
                                <?php foreach ($districts as $key => $value): ?>
                                    <option value="<?php echo $value['id']; ?>" <?php if(isset($birth_district)){if($value['id'] == $birth_district){ echo 'selected';}} ?>><?php echo $value['english']. " | ".$value['nepali']; ?></option>    
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="birth_muni" class="form-label">Metropolis/Municipality/V.D.C(म.न.पा./न.पा./गा.पा):</label>
                            <select class="form-select" name="birth_muni" id="birth_muni">
                                <option selected>Click/Select District Once</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="birth_ward" class="form-label">Ward(वडा नं):</label>
                            <input type="number" class="form-control" id="birth_ward" name="birth_ward" required="required"<?php if(isset($birth_ward)){echo ' value="'.$birth_ward.'"';} ?>>
                        </div>
                    </div>

                    <label for="place_en" style="font-weight: bolder;">Permanent Address details(स्थाई ठेगाना बिबरण):</label>

                    <div class="mb-3 form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="same_as_birth" value="same_as_birth" onchange="same_as_birth_changed(this);">
                        <label class="form-check-label" for="same_as_birth">Same as birth address(जन्म ठेगाना र स्थाई ठेगाना एउटै).</label>
                    </div>
                
                    <div class="ml-5 mb-3">
                        <div class="mb-3">
                            <label for="place_en" class="form-label">Permanent Address:</label>
                            <input type="text" class="form-control" id="place_en" name="place_en" required="required"<?php if(isset($place_en)){echo ' value="'.$place_en.'"';} ?>>
                        </div>

                        <div class="mb-3">
                            <label for="place_ne" class="form-label">स्थाई ठेगाना:</label>
                            <input type="text" class="form-control" id="place_ne" name="place_ne" required="required"<?php if(isset($place_ne)){echo ' value="'.$place_ne.'"';} ?>>
                        </div>

                        <div class="mb-3">
                            <label for="district" class="form-label">District(जिल्ला):</label>
                            <select class="form-select" name="district" id="district" onchange="permanent_district_changed(this);" onclick="permanent_district_changed(this);">
                                <option value='NaN' selected>Open this select menu</option>
                                <?php foreach ($districts as $key => $value): ?>
                                    <option value="<?php echo $value['id']; ?>"  <?php if(isset($district)){if($value['id'] == $district){ echo 'selected';}} ?>><?php echo $value['english']. " | ".$value['nepali']; ?></option>    
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="muni" class="form-label">Metropolis/Municipality/V.D.C(म.न.पा./न.पा./गा.पा):</label>
                            <select class="form-select" name="muni" id="muni">
                                <option selected>Click/Select District Once</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="ward" class="form-label">Ward(वडा नं):</label>
                            <input type="number" class="form-control" id="ward" name="ward" required="required"<?php if(isset($ward)){echo ' value="'.$ward.'"';} ?>>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md">
                    <div class="mb-3">
                        <label for="officer_name_en" class="form-label">Officer's name:</label>
                        <input type="text" class="form-control" id="officer_name_en" name="officer_name_en" required="required"<?php if(isset($officer_name_en)){echo ' value="'.$officer_name_en.'"';} ?>>
                    </div>

                    <div class="mb-3">
                        <label for="officer_pos_en" class="form-label">Officer's position:</label>
                        <input type="text" class="form-control" id="officer_pos_en" name="officer_pos_en" required="required"<?php if(isset($officer_pos_en)){echo ' value="'.$officer_pos_en.'"';} ?>>
                    </div>
                </div>
                <div class="col-md">
                    <div class="mb-3">
                        <label for="officer_name_ne" class="form-label">अधिकारीको नाम थर:</label>
                        <input type="text" class="form-control" id="officer_name_ne" name="officer_name_ne" required="required"<?php if(isset($officer_name_ne)){echo ' value="'.$officer_name_ne.'"';} ?>>
                    </div>

                    <div class="mb-3">
                        <label for="officer_pos_ne" class="form-label">अधिकारीको पद:</label>
                        <input type="text" class="form-control" id="officer_pos_ne" name="officer_pos_ne" required="required"<?php if(isset($officer_pos_ne)){echo ' value="'.$officer_pos_ne.'"';} ?>>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 d-flex flex-row flex-wrap justify-content-center col-12">
                    <button type="submit" class="btn btn-primary m-1" name="submit" value="submit">Submit (ठिक छ)</button>
                    <button type="reset" class="btn btn-warning m-1">Clear (खालि गर्ने)</button>
                    <?php
                        if(isset($cancel)){
                            if($cancel == TRUE){
                                echo '<a class="btn btn-danger m-1" href="/">Cancel (रद्द गर्ने)</a>';
                            }
                        }
                    ?>
                </div>
            </div>
        </form>
    </div>
</main>