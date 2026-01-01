<div class="text-center text-light py-5">
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
            <div class="mt-3">
                <label for="name" class="text-light fs">Name :</label>
                <input type="text" class="form-control py-3" placeholder="Name" name="name" required>
            </div>

            <div class="mt-3">
                <label for="email" class="text-light fs">Email :</label>
                <input type="email" class="form-control py-3" placeholder="Email" name="email" required>
            </div>

            <div class="mt-3">
                <label for="phone" class="text-light fs">Phone :</label>
                <input type="number" class="form-control py-3" placeholder="phone" name="phone" required>
            </div>

            <div class="mt-3">
                <label for="address" class="text-light fs">Address :</label> <br>
                <textarea class="form-control py-3" placeholder="Address" name="address" cols="20" rows="5"></textarea>
            </div>

            <div class="mt-3">
                <input type="submit" class="fs py-3 btn-submit" value="Send">
            </div>

        </form>
    </div>
</div>