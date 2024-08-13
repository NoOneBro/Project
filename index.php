<?php 
include 'include/header.php';
?>
<header>
        <h1>Header Content</h1>
</header>


<div class="content">

    <h1>Sticky Acrylic Navbar Example</h1>
    <p>Scroll down to see the navbar sticking at a certain position.</p>
    How It Works:
    Normal Scrolling Behavior: The .navbar-container div behaves like any other block-level element, meaning it will scroll with the rest of the page.
    Sticky When Reaching the Top: The position: sticky; in the .navbar class causes the navbar to become fixed at the top of the viewport when the .navbar-container scrolls up to the top. The top: 0; ensures it sticks to the very top.
    Acrylic Effect: The background and backdrop-filter properties give the navbar its acrylic transparency effect.
    This setup allows the navbar to behave like normal content initially and then become sticky only when it reaches the top of the screen during scrolling.
    Hey! Create me a code for NAVBAR which is sticky and is only fixed at certain certain position and also make it acrylic transparent and dont use js.

</div>







<?php 
include 'include/footer.php';
?>