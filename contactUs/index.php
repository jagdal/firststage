<html >
    <head>
        <title>Contact</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
    </head>
    <body dir="rtl">

        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">

                    <h1>اتصل بنا</h1>
                    <p class="lead">مرحبا بجميع المهتمين الدين يودون المساعدة و الإتصال بنا </p>


                    <form id="contact-form" method="post" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">النسب *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="الرجاء إدخال اسمك الأخير *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">الإسم الأول *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="الرجاء إدخال اسمك الأول  *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">الإيميل *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="الرجاء إدخال البريد الإلكتروني الخاص بك *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">رقم الهاتف *</label>
                                        <input id="form_phone" dir="rtl" type="tel" name="phone" class="form-control" placeholder="الرجاء إدخال رقم هاتفك">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">الرسالة *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="اترك رسالتك *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" name="ok" class="btn btn-success btn-send" value="إرسال">
                                </div>
                            </div>
                            
                        </div>

                    </form>
            <?php 
            if(isset($_POST['ok'])){
                include_once 'function.php';
                $obj=new Contact();
                $res=$obj->contact_us($_POST);
                if($res==true)
                    echo "<script>alert('Query successfully Submitted.Thank you')</script>";
                
            }
            ?>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->

        <a href="">Show tabe </a>


    </body>
</html>
