<div class="text-center text-light p">
    <h1 class="letter-spacing">CONTACT US</h1>
    <div class="line-design">
        <div class="line-1"></div>
        <div class="line-2"></div>
        <div class="line-3"></div>
        <div class="line-4"></div>
    </div>

</div>

<div class="contact-container">
    <div class="">
        <img src="{{asset('asset/image/codezara-logo-codezara.png')}}" alt="" class="img-fluid">
    </div>
    <div class="">
        <form action="" method="post">
            <h1 class="text-light">Contact Us</h1>
            <div class="mt-1">
                <label for="name" class="text-light fs">Name :</label>
                <input type="text" class="form-control fs px-1 mt-1" placeholder="Name" name="name" required>
            </div>

            <div class="mt-1">
                <label for="email" class="text-light fs">Email :</label>
                <input type="email" class="form-control fs px-1 mt-1" placeholder="Email" name="email" required>
            </div>

            <div class="mt-1">
                <label for="phone" class="text-light fs">Phone :</label>
                <input type="number" class="form-control fs px-1 mt-1" placeholder="phone" name="phone" required>
            </div>

            <div class="mt-1">
                <label for="address" class="text-light fs">Address :</label> <br>
                <textarea class="form-control fs px-1 mt-1" placeholder="Address" name="address" cols="20"
                    rows="5"></textarea>
            </div>

            <div class="mt-1">
                <input type="submit" class="fs px-1 btn-submit" value="Send">
            </div>

        </form>
    </div>
</div>