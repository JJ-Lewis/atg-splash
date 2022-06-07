<div x-data="{ open:true, shown:false }" @click="open = true" class="container-what">
    <h1 x-intersect="$el.classList.add('fadeInUp')" class="header-what" >WHAT WE DO</h1>
    <div x-intersect="$el.classList.add('fadeInUp')" class="details-what">
        <div class="column-what">
            <div style="padding-top: 2.5rem;">
                <i class="fas fa-glasses"></i>
            </div>
            <h3>Education</h3>
            <p>Our mission is to help introduce Web-3 concepts to the African marketplace, growing knowledge
            and incubating ideas within this emerging market.
            </p>
            <p>We do this by sharing knowledge within our community,
            helping and mentoring those who express interest in these fascinating concepts, and connecting individuals
            across various disciplines and professions.</p>
        </div>
        <div class="column-what">
            <div style="padding-top: 2.5rem;">
                <i class="far fa-comments"></i>
            </div>
            <h3>Community</h3>
            <p>We believe the most important foundation of any industry is its community, and thus aim to further grow the amazing
            group of developers, artists, and visionaries that have already begun emerging from the African context, bringing with them
            the unique ideas and innovating spirit that we are known for. </p>
            <p>Establishing a firm African presence in the metaverse is key to
            encouraging further growth in this emerging market.</p>
        </div>
        <div class="column-what">
            <div style="padding-top: 2.5rem;">
                <i class="fas fa-chart-line"></i>
            </div>
            <h3>Growth</h3>
            <p>Our ultimate goal is to give people the tools they need to thrive in this new market. </p><p>Through education as a solid foundation, and a supportive
            like-minded community, we hope to grow the African influence on this global market to new heights.</p>
        </div>
    </div>
</div>

