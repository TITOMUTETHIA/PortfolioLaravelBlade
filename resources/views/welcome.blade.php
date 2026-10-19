
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinidu | Software Developer</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            font-family: Arial, sans-serif;
            background: #07111f;
            color: #f1f5f9;
            line-height: 1.7;
        }
        nav {
            display: flex; justify-content: space-between;
            align-items: center; padding: 22px 8%;
            border-bottom: 1px solid #1e293b;
        }
        .logo { font-size: 24px; font-weight: bold; color: #60a5fa; }
        nav a { color: #cbd5e1; text-decoration: none; margin-left: 22px; }
        nav a:hover { color: #60a5fa; }
        .hero {
            min-height: 78vh; display: flex; align-items: center;
            padding: 70px 10%;
            background: radial-gradient(ellipse at 80% 40%, #123568 0%, #07111f 55%);
        }
        .hero-content { max-width: 750px; }
        .tag {
            color: #60a5fa; border: 1px solid #2563eb;
            padding: 6px 14px; border-radius: 30px;
            display: inline-block; margin-bottom: 25px;
        }
        h1 { font-size: clamp(40px, 7vw, 70px); line-height: 1.15; }
        h1 span { color: #60a5fa; }
        .hero p { color: #a9b8cc; font-size: 18px; margin: 24px 0; max-width: 620px; }
        .btn {
            display: inline-block; padding: 12px 22px; border-radius: 8px;
            text-decoration: none; margin: 5px 8px 5px 0;
            background: #2563eb; color: white; font-weight: bold;
        }
        .btn-outline { background: transparent; border: 1px solid #475569; }
        section { padding: 75px 10%; }
        h2 { font-size: 34px; margin-bottom: 22px; }
        .muted { color: #a9b8cc; }
        .cards { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
        .card {
            background: #0d1b2e; border: 1px solid #22334a;
            border-radius: 14px; padding: 25px;
        }
        .card h3 { color: #93c5fd; margin-bottom: 10px; }
        .skills { display: flex; flex-wrap: wrap; gap: 12px; }
        .skill {
            background: #102543; border: 1px solid #254775;
            color: #bfdbfe; border-radius: 8px; padding: 9px 15px;
        }
        footer {
            text-align: center; padding: 25px;
            border-top: 1px solid #1e293b; color: #94a3b8;
        }
        @media (max-width: 700px) {
            nav { align-items: flex-start; gap: 15px; flex-direction: column; }
            nav a { margin: 0 12px 0 0; }
            .cards { grid-template-columns: 1fr; }
            .hero { padding: 60px 7%; }
            section { padding: 55px 7%; }
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">Dinidu.dev</div>
        <div>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </div>
    </nav>

    <main>
        <section class="hero">
            <div class="hero-content">
                <span class="tag">IT Intern · Aspiring Developer</span>
                <h1>Hello, I'm <span>Dinidu</span><br>Software Developer.</h1>
                <p>
                    I build web applications using modern technologies.
                    I'm passionate about learning, solving problems, and
                    creating useful digital experiences.
                </p>
                <a class="btn" href="#projects">Explore My Projects ↗</a>
                <a class="btn btn-outline" href="#contact">Contact Me</a>
            </div>
        </section>

        <section id="about">
            <h2>About Me</h2>
            <p class="muted">
                I'm an aspiring Software Developer pursuing an HND in
                Information Technology at SLIATE. I'm gaining practical
                experience through IT internship work and personal web
                development projects.
            </p>
        </section>

        <section id="skills">
            <h2>My Skills</h2>
            <div class="skills">
                <span class="skill">PHP</span>
                <span class="skill">Laravel</span>
                <span class="skill">MySQL</span>
                <span class="skill">HTML</span>
                <span class="skill">CSS</span>
                <span class="skill">JavaScript</span>
                <span class="skill">Git & GitHub</span>
                
                
            </div>
        </section>

        <section id="projects">
            <h2>Featured Projects</h2>
            <div class="cards">
                <article class="card">
                    <h3>Foodhub</h3>
                    <p class="muted">A Laravel-based food shop management and POS system with cashier, sales, and food management features.</p>
                    <p><a href="https://github.com/dinidu2002/foodhub" target="_blank" rel="noopener noreferrer" class="btn">View Project ↗</a></p>
                </article>
                <article class="card">
                    <h3>AgriConnect</h3>
                    <p class="muted">An agriculture-focused web application designed to connect users with useful farming information.</p>
                    <p><a href="https://github.com/dinidu2002" target="_blank" rel="noopener noreferrer" class="btn btn-outline">GitHub ↗</a></p>
                </article>
                <article class="card">
                    <h3>TaskFlow Pro</h3>
                    <p class="muted">A project management application built with Laravel to help organise work and tasks.</p>
                    <p><a href="https://github.com/dinidu2002/taskflow-pro" target="_blank" rel="noopener noreferrer" class="btn btn-outline">View Project ↗</a></p>
                </article>
            </div>
        </section>

        <section id="contact">
            <h2>Let's Connect</h2>
            <p class="muted">I'm interested in software development opportunities, internships, and collaboration.</p>
            <p style="margin-top:20px">
                <a class="btn" href="https://github.com/dinidu2002" target="_blank" rel="noopener noreferrer">GitHub ↗</a>
                <a class="btn btn-outline" href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer">LinkedIn</a>
            </p>
        </section>
    </main>

    <footer>© 2026 Dinidu Dissanayake · Built with Laravel</footer>
</body>
</html>
