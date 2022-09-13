<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
.timer-body {
    font: normal 13px/20px Arial, Helvetica, sans-serif;
    word-wrap: break-word;
}
body{
    background:#eee;
    background-attachment: fixed;
    background-size:cover;
}
.countdown-label {
    font: thin 15px Arial, sans-serif;
    color: #65584c;
    text-align: center;
    text-transform: uppercase;
    display: inline-block;
    letter-spacing: 2px;
    margin-top: 9px
}

#countdown {
    box-shadow: 0 1px 2px 0 rgba(1, 1, 1, 0.4);
    width: 240px;
    height: 96px;
    text-align: center;
    background: #f1f1f1;

    border-radius: 5px;

    margin: auto;

}



#countdown #tiles {
    color: #fff;
    position: relative;
    z-index: 1;
    text-shadow: 1px 1px 0px #ccc;
    display: inline-block;
    font-family: Arial, sans-serif;
    text-align: center;

    padding: 20px;
    border-radius: 5px 5px 0 0;
    font-size: 48px;
    font-weight: thin;
    display: block;

}

.color-full {
    background: #53bb74;
}

.color-half {
    background: #ebc85d;
}

.color-empty {
    background: #e5554e;
}

#countdown #tiles>span {
    width: 70px;
    max-width: 70px;

    padding: 18px 0;
    position: relative;
}





#countdown .labels {
    width: 100%;
    height: 25px;
    text-align: center;
    position: absolute;
    bottom: 8px;
}

#countdown .labels li {
    width: 102px;
    font: bold 15px 'Droid Sans', Arial, sans-serif;
    color: #f47321;
    text-shadow: 1px 1px 0px #000;
    text-align: center;
    text-transform: uppercase;
    display: inline-block;
}
#videoElement {
  position: absolute;
  z-index: 9;
  cursor: move;
  height: 96px;
}

</style>
<div class="col-12 bg-primary text-white h3 p-3"><center>Jain University Inter-Department Quiz Competition<center></div>


<div class="timer-body sticky-top mt-md-1 " style="float:right">
    <input type="hidden" id="set-time" value="1" />
    <div id="countdown">

        <div id='tiles' class="color-full"></div>
        <div class="countdown-label">Time Remaining</div>

    </div>
</div>

<div class="container p-lg-4">

    <form class="mt-5 pt-3" method="post" action="<?php echo base_url();?>Exam/submit_answer_process" id="myForm">



        <?php 
$i=1;

$this->db->order_by('rand()');
$this->db->limit(20);
$sql=$this->db->get('exam_questions');
foreach($sql->result() as $user_data)
{
?>
    <div class="form-row mt-5 col-12 fs-4 p-4 shadow" style="background:white;">

        <div class="col-11"><b> <?php echo $i ?>. </b>
            
                <?php echo $user_data->question; ?>
            </div>

            <?php 
            $str='assets/image/q_pic/';

            if( $user_data->pic ==NULL || $str==$user_data->pic)
            {
            }
            else{
                ?>
                <div class="col-4 p-5">
                    <img src="<?php echo base_url($user_data->pic); ?>" alt="" style="max-width:40vw;height:auto;">
                </div>
           
            <?php
            }
            ?>
            <div class="col-md-5 ml-4 mt-3 form-check"><input type="radio" name="answer<?php echo $i ?>"
                    class="form-check-input" value="a" id="optiona<?php echo $i ?>"><label class="form-check-label"
                    for="optiona<?php echo $i ?>"><?php echo $user_data->option_a ?></label></div>
            <div class="col-md-5 ml-4 mt-3 form-check"><input type="radio" name="answer<?php echo $i ?>"
                    class="form-check-input" value="b" id="optionb<?php echo $i ?>"><label class="form-check-label"
                    for="optionb<?php echo $i ?>"><?php echo $user_data->option_b ?></label></div>
            <div class="col-md-5 ml-4 mt-3 form-check"><input type="radio" name="answer<?php echo $i ?>"
                    class="form-check-input" value="c" id="optionc<?php echo $i ?>"><label class="form-check-label"
                    for="optionc<?php echo $i ?>"><?php echo $user_data->option_c ?></label></div>
            <div class="col-md-5 ml-4 mt-3 form-check"><input type="radio" name="answer<?php echo $i ?>"
                    class="form-check-input" value="d" id="optiond<?php echo $i ?>"><label class="form-check-label"
                    for="optiond<?php echo $i ?>"><?php echo $user_data->option_d ?></label></div>
        </div>


        <?php
        $i++;
}
?>





        <div class="form-row mt-5">
            <input class="btn btn-primary ml-1 ml-md-3 mb-2 col-12" type="submit" name="u_reg" value="Submit Answers">
        </div>
        <input type="hidden" name="limit" value="<?php echo $i; ?>">

    </form>

</div>







    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Candidate Guide — On the day of the Assessment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="overflow-y:scroll;height:60vh">
                    <ul>
                    <li>Please sit in a quiet room with no background noise or people around.</li><br>
                    <li>Ensure proper lighting in the room — Source of light must not be behind you.</li><br>
                    <li>Please ensure the wall behind you has a plain background with no objects hanging on it.</li><br>
                    <li>Plan to start your system on the test day 15 minutes before the scheduled time. Start
                        Exam on time, you will not be allowed to appear after the scheduled time.</li><br>
                    <li>For the entire duration of the exam, please remain seated in front of your webcam.</li><br>
                    <li>If you face any technical issue during the exam,please refer to the FAQ Document. If
                        not resolved, then contact your placement coordinator via email/call/message from
                        another device.</li><br>
                    <li>Student should not indulge in any malpractice while writing the exam. Any misconduct
                        observed by the proctor will be recorded and filed against you, which may lead to suitable
                        disciplinary action.</li><br>
                    <li>If you are taking the test from Mobile, then turn-off your message/call/App notification - if
                        you open your notification during the Exam. it will be counted as a <b style="color:red;">violation</b> After
                        the certain number of warnings System will <b style="color:red;">Logout your Exam</b>.</li><br>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Accept</button>
                </div>
            </div>
        </div>
    </div>



    <script>
    $(document).ready(function() {
        $("#exampleModalCenter").modal('show');
    });
    </script>
    <script language="javascript" type="text/javascript">
    var i = 1;
    $('html').click(function() {
        if (!document.fullscreenElement && i == 1) {
            $('html')[0].requestFullscreen();
            i++;
        }
        document.addEventListener('fullscreenchange', exitHandler);
        document.addEventListener('webkitfullscreenchange', exitHandler);
        document.addEventListener('mozfullscreenchange', exitHandler);
        document.addEventListener('MSFullscreenChange', exitHandler);

        function exitHandler() {
            if (!document.fullscreenElement && !document.webkitIsFullScreen && !document.mozFullScreen && !
                document
                .msFullscreenElement) {
               //1 document.getElementById("myForm").submit();
            }
        }
    });
    </script>

    <script>
    if (typeof document.onselectstart != "undefined") {
        document.onselectstart = new Function("return false");
    } else {
        document.onmousedown = new Function("return true");
    }
    </script>
        <?php 

$this->db->select('*');
$this->db->from('exam_questions');
$sql3=$this->db->get();
foreach($sql3->result() as $user_data3)
{
    $time=$user_data3->time;

}
function seconds_from_time($time) {
	list($h, $m, $s) = explode(':', $time);
	return ($h * 3600) + ($m * 60) + $s;
}

$time=seconds_from_time($time);
?>
    <script>

    
    var minutes = $('#set-time').val();

    var target_date = new Date().getTime() + ((minutes * <?php echo $time ?>) * 1000); // set the countdown date 60 to needed seconds
    var time_limit = ((minutes * <?php echo $time ?>) * 1000);
    //set actual timer 60 to needed seconds
    setTimeout(
        function() {
            document.getElementById("myForm").submit();
        }, time_limit);

    var days, hours, minutes, seconds; // variables for time units

    var countdown = document.getElementById("tiles"); // get tag element

    getCountdown();

    setInterval(function() {
        getCountdown();
    }, 1000);

    function getCountdown() {

        // find the amount of "seconds" between now and target
        var current_date = new Date().getTime();
        var seconds_left = (target_date - current_date) / 1000;

        if (seconds_left >= 0) {
            console.log(time_limit);
            if ((seconds_left * 1000) < (time_limit / 2)) {
                $('#tiles').removeClass('color-full');
                $('#tiles').addClass('color-half');

            }
            if ((seconds_left * 1000) < (time_limit / 4)) {
                $('#tiles').removeClass('color-half');
                $('#tiles').addClass('color-empty');
            }

            days = pad(parseInt(seconds_left / 86400));
            seconds_left = seconds_left % 86400;

            hours = pad(parseInt(seconds_left / 3600));
            seconds_left = seconds_left % 3600;

            minutes = pad(parseInt(seconds_left / 60));
            seconds = pad(parseInt(seconds_left % 60));

            // format countdown string + set tag value
            countdown.innerHTML = "<span>" + hours + ":</span><span>" + minutes + ":</span><span>" + seconds +
                "</span>";

        }

    }

    function pad(n) {
        return (n < 10 ? '0' : '') + n;
    }
    document.addEventListener('contextmenu', event => event.preventDefault());
    </script>
    <script>
        $(window).blur(function(){
           //2 document.getElementById("myForm").submit();
        });
    </script>
     
     