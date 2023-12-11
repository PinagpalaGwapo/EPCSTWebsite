<div id="body-admission">
    <div id="container1" class="cntnr1">
        <div id="admission-paragraph">
        <p>Opening Doors for Excellence and Knowledge</p>
          We at Eastwoods Professional College Of Science and Technology are commited to developing young people's minds and igniting their passions for learning. We stand out from the competitions because of our dedication to offering a comprehensive education. We codially encourage you to investigate the options and go off on a life-changing educational journey with us. #TheHomeOfChampions.
        </div>
    </div>
    <div id="container2" class="cntnr2">
        <div class="admission">
            <p>Admission</p>
            <div class="admission-border-box">
                <div class="custom-navigation">
                    <div class="click"><h6 onclick="showSection('newStudent')">New Student</h6></div>
                    <div class="click"><h6 onclick="showSection('oldStudent')">Old Student</h6></div>
                </div>

                <section id="newStudent" class="border-box">
                    <div id="newstudent">Fill-up Process:</div>
                    <ol>
            <li>1. Fill out this Google Form: <a href="https://docs.google.com/forms/d/e/1FAIpQLSfUOdIxmBaFdPvTsMwvFuEoFsMFVbIQwFwbCnVcOvEOQvC5Q/viewform">Eastwoods Old Student Application Form</a></li>
            <li>2. After filling it out, wait for our admission to contact via phone number provided in the form.</li>
            <li>3. Pay the fees and you're done!</li>
        </ol>
                </section>

                <section id="oldStudent" class="border-box">
                <div id="oldstudent">Online Process:</div>
                    <ol>
            <li>1. Fill out this Google Form: <a href="https://docs.google.com/forms/d/e/1FAIpQLSfUOdIxmBaFdPvTsMwvFuEoFsMFVbIQwFwbCnVcOvEOQvC5Q/viewform">Eastwoods Old Student Application Form</a></li>
            <li>2. After filling it out, wait for our admission to contact via phone number provided in the form.</li>
            <li>3. Pay the fees and you're done!</li>
        </ol>
                </section>
            </div>
        </div>
    </div>

    <script>
        function showSection(sectionId) {
            // Hide all sections
            document.querySelectorAll('section').forEach(section => {
                section.style.display = 'none';
            });

            // Remove the 'active' class from all buttons
            document.querySelectorAll('.custom-navigation h6').forEach(button => {
                button.classList.remove('active');
            });

            // Show the selected section
            document.getElementById(sectionId).style.display = 'block';

            // Add the 'active' class to the clicked button
            document.querySelector(`.custom-navigation h6[onclick="showSection('${sectionId}')"]`).classList.add('active');
        }
    </script>
</div>
