<x-header/>
<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<div class="wrapper">




    <form class="form" action="register" method="POST">
        @csrf
        <div class="form__title">Sign up</div>
        <p class="form__desc">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, nostrum? Laudantium molestiae explicabo numquam animi corrupti debitis ratione, accusamus nemo optio eum vero nesciunt facere aperiam! Labore pariatur accusantium exercitationem.
        </p>

        <div class="form__item">
            <label for="givennames" class="form__label">Identification Number</label>
            <input type="text" class="form__input" name="Identification_No" id="Identification_No" placeholder="Enter your given name(s)" required>
            <span class="form__error">A sample error message</span>
            <span style="color: red">@error('Identification_No'){{$message}}@enderror</span>
        </div>
        <div class="form__item">
            <label for="givennames" class="form__label">Equipment Name</label>
            <input type="text" class="form__input" name="Equipment_Name" id="Equipment_Name" placeholder="Enter your given name(s)" required>
            <span class="form__error">A sample error message</span>
        </div>

        <div class="form__item">
            <label for="categorylbl" class="form__label">Category</label>
            <input type="text" class="form__input" name="category" id="category" placeholder="Enter category" required>
            <span class="form__error">A sample error message</span>
        </div>
        <div class="form__item">
            <label for="classificationlbl" class="form__label">Classification</label>
            <input type="text" class="form__input" name="classification" id="classification" placeholder="Enter your classification" required>
            <span class="form__error">A sample error message</span>
        </div>


        <!--<div class="form__item">
            <label for="numusers" class="form__label">Number of Users</label>
            <input type="number" class="form__input form__input--small" name="numusers" id="numusers" min="1" max="5" placeholder="How many users? (Max. 5)">
            <span class="form__error">A sample error message</span>
        </div>
        <div class="form__item">
            <label for="expirydate" class="form__label">Expiration Date</label>
            <input type="date" class="form__input form__input--small" name="expirydate" id="expirydate" placeholder="Enter an expiration date">
            <span class="form__error">A sample error message</span>
        </div>
        <div class="form__item">
            <label for="message" class="form__label">Message</label>
            <textarea maxlength="500" class="form__input" name="message" id="message" placeholder="Enter a detailed message about why you wish to signup. (Max. 500 chars)"></textarea>
            <span class="form__error">A sample error message</span>
        </div>-->
        <div class="form__item">
            <button class="form__btn" type="submit">Sign Up</button>
        </div>
    </form>
</div>
