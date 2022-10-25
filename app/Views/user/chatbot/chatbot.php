<?= $this->extend('user/templates/default2') ?>

<?= $this->section('content') ?>
<!--PreLoader-->
<div class="loader">
    <div class="loader-inner">
        <div class="circle"></div>
    </div>
</div>
<!--PreLoader Ends-->

<section style="background:grey;" class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div style="padding-top: 40px;" class="col-md-12 col-lg-10 col-xl-4">
                <!-- chatbot -->
                <div class="wrapper">
                    <div class="title">Aapka Shayak</div>
                    <div class="form">
                        <div class="bot-inbox inbox">
                            <div class="icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="msg-header">
                                <p>Hello there, how can I help you?</p>
                            </div>
                        </div>
                    </div>
                    <form action="chat" method="post" id="contactForm" novalidate>
                        <div class="typing-field">
                            <div class="input-data">
                                <input id="data" type="text" name="text" placeholder="Type something here.." required>
                                <button type="submit" value="submit" id="send-btn">Send</button>
                            </div>
                        </div>
                    </form>
                    <!-- end of chatbot -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--  -->
<script>
    $(document).ready(function() {
        $("#send-btn").on("click", function() {
            $value = $("#data").val();
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
            $(".form").append($msg);
            $("#data").val('');

            // start ajax code
            $.ajax({
                url: <?= base_url('/chat') ?>,
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
                    $(".form").append($replay);
                    // when chat goes down the scroll bar automatically comes to the bottom
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });
    });
</script>
<!--  -->

<?= $this->endSection() ?>