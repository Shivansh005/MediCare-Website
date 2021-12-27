<section class="contact" id="appoint">

    <div class="container min-vh-100">

        <div class="row justify-content-center">

            <h1 class="heading"><span>'</span> make an appointment <span>'</span></h1>
            
            <div class="col-md-10" data-aos="flip-down">
                
                <form id="p_appoint">
                    <div id="msg-appoint" class="msg"></div>
                    
                    <div class="inputBox">
                        <input type="text" placeholder="name" value="<?php echo $_SESSION['uname'];?>" disabled>
                        <input type="hidden" placeholder="name" name="p_name" value="<?php echo $_SESSION['uname'];?>">
                        <input type="number" placeholder="phone" name="p_number" required>
                    </div>

                    <div class="inputBox">
                        <input type="email" placeholder="email" value="<?php echo $_SESSION['uemail'];?>" disabled>
                        <input type="hidden" placeholder="email" name="p_email" value="<?php echo $_SESSION['uemail'];?>">
                        <select name="p_time" id="" required>
                            <option value="" disabled selected>make an appointment</option>
                            <option value="09-11 am">09-11 am</option>
                            <option value="11-03 pm">11-03 pm</option>
                            <option value="03-06 pm">03-06 pm</option>
                            <option value="06-09 pm">06-09 pm</option>
                        </select>
                    </div>

                    <div class="inputBox">
                        <input type="text" placeholder="your address" name="p_address" required>
                        <select name="p_gender" id="" required>
                            <option value="" disabled selected>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="inputBox">
                        <input type="file" style="color: #fff;" name="p_file" required>
                    </div>

                    <textarea id="" cols="30" rows="10" placeholder="message ( optional )" name="p_msg"></textarea>

                    <input type="hidden" name="tb_name" value="p_appoint">

                    <input type="submit" value="make appointment" class="button">


                </form>

            </div>

        </div>

    </div>

</section>