<footer>
    <div class="contact-container" id="contact">
        <form action="php/form-to-email.php">
            <label for="name">Name</label><br />
            <input type="text" id="name" name="name" placeholder="Your name.." /><br />

            <label for="email">Your email address</label><br />
            <input type="email" id="email" name="email" placeholder="your@mail.here" /><br />

            <label for="region">Region</label><br />
            <select id="region" name="region"><br />
                <option value="gelderland">Gelderland</option>
                <option value="amsterdam">Amsterdam</option>
                <option value="the hague">The Hague</option></select><br />

            <label for="message">Message</label><br />
            <textarea id="message" name="message" placeholder="Write something.." style="height: 200px"></textarea><br />

            <input type="submit" value="Submit" />
        </form>
    </div>
    <div class="information">
        <h2>Info:</h2>
        <ul>
            <li>Company Name: Obviously Goran Grnic Bouw</li>
            <li>Mail: Goran@oggbouw.nl</li>
            <li>Phone: 06 12345 234</li>
            <li>Something: Something</li>
        </ul>
    </div>
    <section class="ftr-social">
        <ul class="ftr-social-list fa-2x">
            <li>
                <a class="fb" href=""><i class="fa-brands fa-facebook"></i></a>
            </li>
            <li>
                <a class="ig" href=""><span class="fa fa-instagram"></span></a>
            </li>
            <li>
                <a class="wa" href=""><i class="fa-brands fa-whatsapp"></i></a>
            </li>
        </ul>
    </section>
    <footer class="ftr-legal">
        <div class="copyright">
            <p>oggbouw.nl &copy; 2022</p>
        </div>
        <div class="author">
        <a href="" class="typewrite" data-period="2000" data-type='[ "Creator: Marko.", "See my work.", "Click me!"]'>
            <span class="wrap"></span>
        </a>
            <!-- <h3>Marko Malec</h3> -->
        </div>
    </footer>
</footer>

<script src="js/typewrite.js"></script>