<body style="background-color: beige;">
    <h1>Contact Us</h1>

    <section >
        <h2>We'd Love to Hear from You!</h2>
        <p>If you have any questions, comments, or feedback, please feel free to reach out to us using the form below. Our customer service team is here to help!</p>
    
        <form action="">
            <label for="name">Name:</label>
            <input type="text"><br><br>
    
            <label for="email">Email:</label>
            <input type="email"><br><br>
    
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea><br><br>
    
            <button type="submit" onclick="send()">Send Message</button>
        </form>
    </section>    
</body>
<script>
function send(){
    alert("Message sent");
}
</script>