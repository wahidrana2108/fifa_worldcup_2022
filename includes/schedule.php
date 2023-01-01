<div class="container" >
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&amp;display=swap');
    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        list-style-type: none;
    }

    :root {
        --bg: rgb(227, 232, 255);
        --card-bg: gray;
        --white: #fff;
        --shadow: rgb(255, 255, 255);
        --text-dark: white;
        --badge-text: rgb(255, 255, 255);
        --btn-bg: rgb(75, 75, 75);
        --scrollbar-bg: rgb(250, 248, 255);
    }

    html {
        font-size: 62.5%;
        scroll-behavior: smooth;
    }

    body {
        font-size: 1.6rem;
    }

    ::-webkit-scrollbar {
        width: 1.2rem;
    }

    ::-webkit-scrollbar-track {
        background: var(--scrollbar-bg);
        box-shadow: inset 0 0 0.3rem var(--bg);
    }

    ::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 1.2rem;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    .container {
        max-width: 144rem;
        padding: 0 2rem;
        margin: 0 auto;
    }

    .tab-link {
        margin: 3rem 2rem 3rem 0;
        display: inline-flex;
    }

    .tab-link a {
        color: var(--white);
        background: var(--btn-bg);
        padding: 0.6rem 1.5rem;
        border-radius: 1.5rem;
        cursor: pointer;
    }

    .section-heading {
        font-size: 3rem;
        margin: 3rem 0;
    }

    .matchs,
    .matchs-by-group {
        padding: 2rem 0;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
        gap: 2rem;
    }

    .match {
        background: var(--card-bg);
        position: relative;
        padding: 1.5rem;
        border-radius: 0.5rem;
        box-shadow: 0 0 0.2rem 0.1rem var(--shadow);
        font-size: 1.6rem;
        font-weight: bold;
        color: var(--text-dark);
    }

    .match-info {
        display: flex;
        justify-content: space-between;
    }

    .badge {
        position: absolute;
        right: -1rem;
        top: -1rem;
        display: inline-flex;
        width: 3rem;
        height: 3rem;
        background: black;
        color: var(--badge-text);
        box-shadow: 0 0 0.2rem 0.1rem var(--card-bg);
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        margin-left: 1rem;
    }

    .flags {
        padding: 3rem 0 1rem 0;
        display: grid;
        grid-template-columns: 3fr 1fr 3fr;
        align-items: center;
        gap: 1rem;
        text-align: center;
    }

    .flag {
        width: 5rem;
    }

    .vs {
        font-size: 3rem;
    }

    .time-area {
        padding: 2rem 0 0 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .time {
        display: inline-flex;
        gap: 1rem;
    }

    .scroll-top {
        opacity: 0;
        transform: translateY(-10rem);
        position: fixed;
        right: 0.5rem;
        bottom: 2rem;
        background: var(--bg);
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 0 0.1rem var(--badge-text);
        transition: all 0.5s ease-in-out;
        cursor: pointer;
        z-index: 100;
    }

    .scroll-top.active {
        opacity: 1;
        transform: translateY(0);
    }

    .scroll-top img {
        width: 2rem;
        transform: rotate(180deg);
    }

    @media (max-width: 382px) {
        .tab-link {
            margin: 2rem 0 0 0;
        }
        .matchs,
        .matchs-by-group {
            grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
        }
    }
    </style>
    <div class="match-tabs">
        <li class="tab-link">
            <a href="#match-date">Match By Date</a>
        </li>
        <li class="tab-link">
            <a href="#match-group">Match By Group</a>
        </li>
    </div>
    <h1 class="section-heading text-light">Match By Date</h1>
    <div class="matchs" id="match-date"></div>
    <h1 class="section-heading text-light">Match By Group</h1>
    <div class="matchs-by-group" id="match-group"></div>
</div>
<div class="scroll-top">
    <img src="includes/arrow.png" alt="arrow" />
</div>

<!-- script start -->

<script>
    let scroll_btn = document.querySelector('.scroll-top');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 200) {
            scroll_btn.classList.add('active');
        } else {
            scroll_btn.classList.remove('active');
        }
    });

    scroll_btn.addEventListener('click', () => {
        document.documentElement.scrollIntoView({
            behavior: 'smooth',
        });
    });

    async function fetchMatch() {
        let match_by_date = document.querySelector('#match-date');
        let match_by_group = document.querySelector('#match-group');
        let data = await fetch('includes/fifa-world-cup.json');
        let response = await data.json();
        let all_match = [];

        function randerDom(match, selector) {
            selector.innerHTML += `
        <div class="match">
        <div class="match-info">
            <h4 class="group">${match.group}</h4>
            <h4>Match Number<span class="badge">${match.matchNumber}</span> </h4>
        </div>
        <div class="flags">
            <div class="home-flag">
                <img src="${match.home_flag}" alt="${match.home_team}" class="flag" />
            <h3 class="home-team">${match.home_team}</h3>
            </div>
            <span class="vs">
            VS
            </span>
            <div class="away-flag">
            <img src="${match.away_flag}" alt="${match.away_team}" class="flag" />
            <h3 class="home-team">${match.away_team}</h3>
            </div>
        </div>
        <div class="time-area">
            <div class="time">
                <h4 class="month">${match.month}</h4>
                <h4 class="day">${match.day}</h4>
                <h4 class="date">${match.date}</h4>
            </div>
            <h4 class="match-time">${match.localTime}</h4>
        </div>
     </div>
  `;
        }

        for (let i = 0; i < response.length; i++) {
            let time = new Date(response[i]['DateUtc']);
            let localTime = time.toLocaleTimeString().replace(':00:00', ':00');
            let day_month = time.toString().split(' ');
            let date = day_month[2];
            let home_team = response[i]['HomeTeam'];
            let home_flag = response[i]['flag'][0];
            let away_team = response[i]['AwayTeam'];
            let away_flag = response[i]['flag'][1];
            let stadium = response[i]['Location'];
            let group = response[i]['Group'];
            let matchNumber = response[i]['MatchNumber'];
            let roundNumber = response[i]['RoundNumber'];
            let Match = {
                localTime,
                day: day_month[0],
                month: day_month[1],
                home_team,
                home_flag,
                away_team,
                away_flag,
                stadium,
                group,
                matchNumber,
                roundNumber,
                date,
            };
            all_match.push(Match);
            randerDom(Match, match_by_date);
        }

        function fBg(group) {
            return all_match.filter((g) => {
                return g.group.includes(group);
            });
        }
        let filter_by_group = [
            ...fBg('Group A'),
            ...fBg('Group B'),
            ...fBg('Group C'),
            ...fBg('Group D'),
            ...fBg('Group E'),
            ...fBg('Group F'),
            ...fBg('Group G'),
            ...fBg('Group H'),
        ];
        for (let j = 0; j < filter_by_group.length; j++) {
            randerDom(filter_by_group[j], match_by_group);
        }
    }
    fetchMatch();
</script>
<!-- script end -->