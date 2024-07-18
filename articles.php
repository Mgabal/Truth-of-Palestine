<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Articles</h1>
    </header>
    <main>
        <div class="articles">
            <div class="article-card">
                <a href="https://www.aljazeera.com/news/2023/10/9/whats-the-israel-palestine-conflict-about-a-simple-guide">What’s the Israel-Palestine conflict about? A simple guide</a>
            </div>
            <div class="article-card">
                <a href="https://felesteen.news/post/153369/%D8%AD%D8%B1%D8%A8-%D8%A7%D9%84%D8%A5%D8%A8%D8%A7%D8%AF%D8%A9-%D8%A7%D9%84%D8%AC%D9%85%D8%A7%D8%B9%D9%8A%D8%A9-%D8%B9%D9%84%D9%89-%D8%BA%D8%B2%D8%A9-%D8%AA%D8%AF%D8%AE%D9%84-%D9%8A%D9%88%D9%85%D9%87%D8%A7-%D8%A7%D9%84-279-%D8%AA%D9%88%D8%A7%D9%84%D9%8A%D8%A7-%D8%A2%D8%AE%D8%B1-%D8%A7%D9%84%D8%AA%D8%B7%D9%88%D8%B1%D8%A7">محدث حرب الإبادة الجماعية على غزة تدخل يومها الـ 279 تواليًا.. آخر التّطورات 11 يوليو 2024 . الساعة 08:04 بتوقيت القدس</a>
            </div>
            <div class="article-card">
                <a href="https://www.middleeastmonitor.com/20240311-zain-sends-message-of-hope-and-resilience-for-people-of-gaza-in-new-ramadan-song/">Zain sends message of hope and resilience for people of Gaza in new Ramadan song</a>
            </div>
            <div class="article-card">
                <a href="https://www.britannica.com/place/Palestine/The-Iron-Age">Palestine | History, People, Conflict, & Religion</a>
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
    padding: 1px;
    color: #fff;
}

main {
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.articles {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 20px;
    max-width: 1000px;
    width: 100%;
    margin-top: 20px;
    color: #007A3D;
}

.article-card {
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
    color: #007A3D;
}

.article-card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.article-card a {
    text-decoration: none;
    color: #007A3D;
    font-size: 18px;
    text-align: center;
    display: block;
    width: 100%;
    height: 100%;
    padding: 20px;
    box-sizing: border-box;
    transform: translateY(10px);
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.article-card:hover a {
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
    margin-top: 310px;
}

.footer-links a {
    text-decoration: none;
    color: #007A3D;
    
}

@media (max-width: 768px) {
    header h1 {
        font-size: 6vw;
    }
    .cards {
        flex-direction: column;
    }
    .article-card a {
        font-size: 3vw;
    }
}


</style>