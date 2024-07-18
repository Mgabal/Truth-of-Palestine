<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Videos</h1>
    </header>
    <main>
        <div class="vi">
            <div class="vi-card"style="background-image: url('eldaheeh.png');">
                <a href="https://youtu.be/f0oy-NicIgE?si=B6gvSIbCVvw8dJdo">فلسطين.. حكاية الأرض | الدحيح </a>
            </div>
            <div class="article-card" style="background-image: url('history.webp');">
                <a href="https://youtu.be/E4iygQ--7dk?si=cyY0LPcSBeT6FCMs">The History of Palestine Occupation</a>
            </div>
            <div class="article-card" style="background-image: url('bassem.webp');">
                <a href="https://youtu.be/4idQbwsvtUo?si=EfCVfJkm97P4zwxe">Israel-Hamas War: Piers Morgan vs Bassem Youssef On Palestine's Treatment | The Full Interview</a>
            </div>
            <div class="article-card"style="background-image: url('abo zaid.webp');">
                <a href="https://x.com/droos_online/status/1714628234191499646">The story of #Israel and #Palestine in a nutshell.</a>
            </div>
            <div class="article-card"style="background-image: url('mqdefault_6s.webp');">
                <a href="https://youtu.be/zE8GCX1w3ys?si=WniRIbutdL9kf0eb">How Israel STOLE Palestine</a>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-links">
            <a href="index.php">Home</a>
            <p class="Logo"><span class="reversed">&#169;</span> 2024 Mgabal. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

<style>
   
   body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

header {
    text-align: center;
    background-color: #007A3D;
    padding: 10px;
    color: #fff;
}

main {
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.vi {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    max-width: 1000px;
    width: 100%;
    margin-top: 20px;
}

.vi-card, .article-card {
    background-color: azure;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 150px; /* Adjust height as needed */
    display: flex;
    align-items: center;
    justify-content: center;
    flex: 1 1 200px; /* Ensure the cards are responsive */
}

.vi-card:hover, .article-card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.vi-card a, .article-card a {
    text-decoration: none;
    color: antiquewhite;
    font-size: 18px;
    text-align: center;
    display: block;
    width: 100%;
    height: 100%;
    padding: 20px;
    box-sizing: border-box;
    transition: opacity 0.3s ease, transform 0.3s ease;
    opacity: 0;
    transform: translateY(10px);
}

.vi-card:hover a, .article-card:hover a {
    opacity: 1;
    transform: translateY(0);
}

.footer-links {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px 20px;
    background-color: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(5px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    margin-top: 85px;
    flex-wrap: wrap;
}

.footer-links a {
    text-decoration: none;
    color: #007A3D;
    margin: 0 10px;
}

.footer-links .Logo {
    margin: 10px 0;
    flex-basis: 100%;
    text-align: center;
}

/* Responsive Design */
@media (max-width: 768px) {
    header h1 {
        font-size: 6vw;
    }
    .vi-card a, .article-card a {
        font-size: 3vw;
    }
}


</style>