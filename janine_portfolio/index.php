<?php
// Janine Personal Portfolio
// Main page. PHP is used here so the same project can later connect to MySQL.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Janine's personal portfolio - technology, AI automation, web development and entrepreneurship.">
    <title>Janine | Personal Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="site-header" id="home">
    <div class="container nav-wrap">
        <a class="brand" href="#home">
            <span class="brand-mark">J</span>
            <span>ponce_janine_caraballe</span>
        </a>

        <button class="menu-toggle" id="menuToggle" aria-label="Open navigation">☰</button>

        <nav class="navbar" id="navbar">
            <a href="#home">Home</a>
            <a href="#about">About Me</a>
            <a href="#journey">Journey</a>

            <div class="nav-dropdown">
                <button class="drop-btn">Skills <span>⌄</span></button>
                <div class="dropdown-menu">
                    <a href="#web-development">Web Development</a>
                    <a href="#ai-automation">AI & Automation</a>
                    <a href="#creative">Digital Content</a>
                    <a href="#business">Entrepreneurship</a>
                </div>
            </div>

            <div class="nav-dropdown">
    <button class="drop-btn" type="button">
        Skills <span>⌄</span>
    </button>

    <div class="dropdown-menu">
        <a href="#web-development">Web Development</a>
        <a href="#ai-automation">AI & Automation</a>
        <a href="#creative">Digital Content</a>
        <a href="#business">Entrepreneurship</a>
    </div>
</div>

            <a href="#goals">Goals</a>
            <a href="#contact">Contacts</a>
        </nav>
    </div>
</header>

<main>
    <!-- HERO -->
    <section class="hero">
        <div class="hero-shape"></div>
        <div class="container hero-grid">
            <div class="hero-content reveal">
                <p class="eyebrow">Hello, I'm</p>
                <h1>Janine</h1>
                <h2>A hardworking professional exploring <span>technology, AI automation, and entrepreneurship</span></h2>
                <p class="hero-text">
                    I am passionate about learning new skills, creating opportunities,
                    and building a better future for myself and my family.
                </p>
                <div class="hero-buttons">
                    <a class="btn primary" href="#projects">Explore My Projects</a>
                    <a class="btn outline" href="#contact">Contact Me</a>
                </div>
            </div>

            <div class="hero-photo reveal">
                <div class="photo-ring"></div>
                <img src="assets/profile.png" alt="Janine professional profile photo">
            </div>
        </div>

    </section>
<section class="section web-dev-section" id="web-development">

    <div class="container">

        <div class="section-title reveal">
            <p class="eyebrow">WEB DEVELOPMENT</p>
            <h2>Turning Ideas Into Functional Websites</h2>
            <p>
                I am developing my skills in web development by creating
                practical websites and web applications.
            </p>
        </div>

        <!-- Your Web Development content here -->

    </div>

</section>

    <!-- ABOUT -->
    <section class="section" id="about">
        <div class="container two-col">
            <div class="section-heading reveal">
                <p class="eyebrow">ABOUT ME</p>
                <h2>Learning, growing, and creating opportunities.</h2>
            </div>
            <div class="card reveal">
                <p>
                    I am a hardworking professional with a growing interest in web development,
                    AI automation, digital content, and entrepreneurship. I enjoy learning through
                    hands-on projects and turning ideas into practical digital solutions.
                </p>
                <p>
                    This website is my personal space to document my skills, learning journey,
                    projects, goals, and future plans.
                </p>
            </div>
        </div>
    </section>

    <!-- JOURNEY -->
    <section class="section light" id="journey">
        <div class="container">
            <div class="section-title reveal">
                <p class="eyebrow">MY JOURNEY</p>
                <h2>From learning the basics to building real projects.</h2>
                <p>Every project is another step toward becoming more confident in technology.</p>
            </div>

            <div class="timeline">
                <div class="timeline-item reveal">
                    <span class="timeline-dot"></span>
                    <div>
                        <span class="year">01</span>
                        <h3>Started Learning Technology</h3>
                        <p>Explored computer skills, web development fundamentals, and practical digital tools.</p>
                    </div>
                </div>
                <div class="timeline-item reveal">
                    <span class="timeline-dot"></span>
                    <div>
                        <span class="year">02</span>
                        <h3>Web Development</h3>
                        <p>Practiced HTML, CSS, JavaScript, PHP, MySQL, and local development using XAMPP.</p>
                    </div>
                </div>
                <div class="timeline-item reveal">
                    <span class="timeline-dot"></span>
                    <div>
                        <span class="year">03</span>
                        <h3>AI & Automation</h3>
                        <p>Started exploring chatbots, workflow automation, and AI-assisted business solutions.</p>
                    </div>
                </div>
                <div class="timeline-item reveal">
                    <span class="timeline-dot"></span>
                    <div>
                        <span class="year">04</span>
                        <h3>Entrepreneurship</h3>
                        <p>Developed ideas for food and small-business projects and learned how technology can support them.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SKILLS -->
    <section class="section" id="skills">
<p>
                    Small websites and exercises created while learning
                    HTML, CSS, and basic JavaScript.
                </p>

                <div class="tags">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JavaScript</span>
                </div>

                <a href="#contact" class="project-link">
                    View Projects →
                </a>
            </article>

        </div>

    </div>
</section>
        <div class="container">
            <div class="section-title reveal">
                <p class="eyebrow">MY SKILLS</p>
                <h2>Technology skills I'm developing</h2>
            </div>

            <div class="skills-grid">
                <article class="skill-card reveal" id="web-development">
                    <div class="skill-icon">&lt;/&gt;</div>
                    <h3>Web Development</h3>
                    <p>Building responsive websites and basic web applications.</p>
                    <div class="tags">
                        <span>HTML</span><span>CSS</span><span>JavaScript</span>
                        <span>PHP</span><span>MySQL</span>
                    </div>
                </article>

                <article class="skill-card reveal" id="ai-automation">
                    <div class="skill-icon">AI</div>
                    <h3>AI & Automation</h3>
                    <p>Exploring chatbots, automated workflows, and AI-powered business processes.</p>
                    <div class="tags">
                        <span>Chatbots</span><span>ManyChat</span><span>Automation</span>
                    </div>
                </article>

                <article class="skill-card reveal" id="creative">
                    <div class="skill-icon">✦</div>
                    <h3>Digital Content & Creative</h3>
                    <p>Creating website concepts, social content, visual ideas, and storytelling projects.</p>
                    <div class="tags">
                        <span>Design</span><span>Content</span><span>Video</span>
                    </div>
                </article>

                <article class="skill-card reveal" id="business">
                    <div class="skill-icon">₱</div>
                    <h3>Entrepreneurship</h3>
                    <p>Developing practical business ideas and exploring technology-based solutions for small businesses.</p>
                    <div class="tags">
                        <span>Business Ideas</span><span>Planning</span><span>Marketing</span>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section class="section light" id="projects">
        <div class="container">
            <div class="section-title reveal">
                <p class="eyebrow">MY PROJECTS</p>
                <h2>Things I am building and learning from</h2>
            </div>

            <div class="projects-grid">
                <article class="project-card reveal">
                    <div class="project-number">01</div>
                    <h3>Personal Portfolio Website</h3>
                    <p>A responsive personal website presenting my profile, skills, journey, projects, and goals.</p>
                    <div class="tags"><span>HTML</span><span>CSS</span><span>JavaScript</span><span>PHP</span></div>
                </article>

                <article class="project-card reveal">
                    <div class="project-number">02</div>
                    <h3>Point-of-Sale System</h3>
                    <p>A beginner-friendly POS concept for managing products, sales, and records using a database.</p>
                    <div class="tags"><span>PHP</span><span>MySQL</span><span>CRUD</span></div>
                </article>

                <article class="project-card reveal">
                    <div class="project-number">03</div>
                    <h3>AI Automation Concepts</h3>
                    <p>Practice projects exploring chatbot flows and automated responses for small businesses.</p>
                    <div class="tags"><span>AI</span><span>Automation</span><span>Chatbot</span></div>
                </article>

                <article class="project-card reveal">
                    <div class="project-number">04</div>
                    <h3>Business Website Concepts</h3>
                    <p>Digital concepts for food and small-business ideas, including a Taiwan street-food concept.</p>
                    <div class="tags"><span>Branding</span><span>Web</span><span>Business</span></div>
                </article>
            </div>
        </div>
    </section>

    <!-- GOALS -->
    <section class="section" id="goals">
        <div class="container goal-box reveal">
            <div>
                <p class="eyebrow">MY GOALS</p>
                <h2>Keep learning. Keep building. Keep creating opportunities.</h2>
            </div>
            <ul>
                <li>Improve my web development skills.</li>
                <li>Build useful systems for real businesses.</li>
                <li>Develop skills in AI automation.</li>
                <li>Grow my portfolio with practical projects.</li>
                <li>Build sustainable business opportunities.</li>
            </ul>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="section light" id="contact">
        <div class="container two-col contact-layout">
            <div class="section-heading reveal">
                <p class="eyebrow">CONTACT</p>
                <h2>Let's connect.</h2>
                <p>If you would like to collaborate, discuss a project, or simply connect, send me a message.</p>
            </div>

            <form class="contact-form card reveal" action="contact.php" method="POST">
                <label for="name">Name</label>
                <input id="name" name="name" type="text" required>

                <label for="email">Email</label>
                <input id="email" name="email" type="email" required>

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="6" required></textarea>

                <button class="btn primary" type="submit">Send Message</button>
                <p class="form-note">PHP + MySQL contact form included in this project.</p>
            </form>
        </div>
    </section>
</main>

<footer>
    <div class="container footer-wrap">
        <div>
            <strong>Janine</strong>
            <p>Technology • AI Automation • Web Development • Entrepreneurship</p>
        </div>
        <p>© <span id="year"></span> Janine. All rights reserved.</p>
    </div>
</footer>

<script src="script.js"></script>
</body>
</html>
