

<?php $__env->startSection('content'); ?>

    <div class="background1"
        style="background-image:url(../storage/background1.png); background-size: 100% 100%;display:flex;">

        <div class="unidashboard" style="margin-left:20vw;">
            <p style="
            font-family: Montserrat;
            font-style: normal;
            font-weight: 800;
            font-size: 5vw;
            color: #FFFFFF;">
                UniDashboard
            </p>

            <p style="
            font-family: Montserrat;
            font-style: normal;
            color: #FFFFFF;
            font-size:1.5vw">
                Your personal task manager, <br> get started now.
            </p>

            <a class="btn" style="background-color: white;color:rgba(200,160,160,255);" href="/register"
                role="button">Get Started</a>
        </div>

        <div class="imageGetStarted" style="margin-left:5vw;margin-bottom:7vw">
            <img src="../storage/get_started.png" alt="" style="width: 22vw;height:22vw">
        </div>

    </div>

    <div class="TextBox" id="about" style="display: flex;flex-direction:column;align-items:center;color:#585858;font-family: Montserrat;
    font-style: normal">

        <div class="upperText" style="
        font-weight: bold;
        font-size: 5vw;">
            From Us to You
        </div>

        <div class="lowerText" style="font-size: 2vw">
            Developed to personally assist you
        </div>
    </div>

    <div class="imageBox" style="

                        display: flex;
                        justify-content:space-between;
                        margin-top:5vw;
                        margin-left:5vw;
                        margin-right:5vw;
                        margin-bottom:10vw;
                        color: #636363;
                        font-family: Montserrat;
                        font-style: normal;
                        font-weight: bold">

        <div class="box" style="
                        display: flex;
                        flex-direction:column;
                        align-items:center;">

            <img src="../storage/get_started.png" alt="" style="width: 22vw;height:20vw">

            <div class="text" style="
                            font-size:2vw;
                            margin-top:1vw">
                File Manager
            </div>

            <div class="text" style="font-size:1.3vw">
                Upload and share seemlessly with your
            </div>

            <div class="text" style="font-size:1.3vw">
                peers!
            </div>
        </div>

        <div class="box" style="
                        display: flex;
                        flex-direction:column;
                        align-items:center;">

            <img src="../storage/progress_tracker.png" alt="" style="width: 22vw;height:20vw">

            <div class="text" style="
                            font-size:2vw;
                            margin-top:1vw">
                Progress Tracker
            </div>

            <div class="text" style="font-size:1.3vw">
                Track your progress whilst on your scholarship
            </div>

            <div class="text" style="font-size:1.3vw">
                or internship.
            </div>
        </div>

        <div class="box" style="
                        display: flex;
                        flex-direction:column;
                        align-items:center;">

            <img src="../storage/dashboard.png" alt="" style="width: 22vw;height:20vw">

            <div class="text" style="
                        font-size:2vw;
                        margin-top:1vw">
                Dashboard
            </div>

            <div class="text" style="font-size:1.3vw">
                Keep your things organized with a
            </div>

            <div class="text" style="font-size:1.3vw">
                nice and sleek dashboard!
            </div>

        </div>

    </div>


    <div class="joinUS" id="team" style="
                       display: flex;
                       flex-direction:column;
                       align-items:center;
                       margin-bottom:3vw">

        <img src="../storage/join_us.png" alt="" style="width: 27vw;height:25vw">
        <div class="text" style="
                       font-size:1.5vw;
                       color: #373737;
                       font-family: Montserrat;
                       font-style: normal;
                       font-weight: 500;
                       margin-bottom:2vw">
            Join millions of users from around the world!
        </div>
        <a class="btn"
            style="background-color: rgba(200,160,160,255);color:white;font-size:1.5vw;padding: 0.5vw 5vw" href="/register"
            role="button">JOIN US</a>
    </div>


    <br>
    <div class="Explore">
        <div class="TextBox" id="about" style="display: flex;flex-direction:column;align-items:center;color:#585858;font-family: Montserrat;
    font-style: normal">

            <div class="upperText" id="explore" style="
        font-weight: bold;
        font-size: 5vw;">
                Explore
            </div>

            <div class="lowerText" style="font-size: 2vw">
                Introduction to UniDashboard
            </div>
            <br>
        </div>
        <div class="mx-auto" class="embed-responsive embed-responsive-16by9" style="padding-left: 29vw; padding-top: 3vw; padding-bottom: 3vw">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/TLahQwBlK6g"
                frameborder="1" allowfullscreen style="height: 20vw;width: 40vw"></iframe>
        </div>
    </div>



    
    <div class="footer" style="
                        font-family: Montserrat;
                        font-style: normal;
                        font-weight: normal;
                        width:100%;
                        height:13vw;
                        display:flex;
                        justify-content:space-between;
                        background-image:url(../storage/footer.png);background-size: 100%;background-repeat:no-repeat;">


        <div class="TextBox" style="
                        font-size:1.5vw;
                        color:white;
                        margin-top:8vw;
                        margin-left:5vw;
                        margin-right:2vw">
            Contact Us <br>

            <div class="nomor" style="font-size:1vw">
                Call +62 0894-3509-4372
            </div>
        </div>

        <a href="#" class="second" style="color: white;margin-top:9.5vw;font-size:1.5vw">Terms and Conditions</a>
        <script>
            document.querySelector(".second").addEventListener('click', function() {
                Swal.fire("Terms & Conditions",
                    "We are not responsible for any damages done to your personal, and mental health.");
            });
        </script>

        <a href="#" class="second2" style="color: white;margin-top:9.5vw;font-size:1.5vw">Privacy</a>
        <script>
            document.querySelector(".second2").addEventListener('click', function() {
                Swal.fire("Privacy", "We would like to ensure you that your data will be not be hacked.");
            });
        </script>

        <div class="socmedBox" style="margin-top:8vw; margin-right:5vw">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>


    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VANESSA GIOVANI\Documents\GitHub\unidashboard\resources\views/welcome.blade.php ENDPATH**/ ?>