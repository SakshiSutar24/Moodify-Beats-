let currentSongIndex = 0;
let playlist = [];

function searchSongs() {
    let query = document.querySelector(".search-bar").value.toLowerCase();
    let resultsContainer = document.querySelector(".results-container");
    let resultsList = document.querySelector(".results-container ul");
    let noResultsMessage = document.querySelector(".no-results-message");
    let audioPlayer = document.getElementById("audioPlayer"); // Audio Player 

    resultsList.innerHTML = "";

    const songs = [
        { title: "Barbaadiyan", artist: "From Shiddat", src: "Barbaadiyan - (Raag.Fm).mp3", image: "Shiddat-Movie-Manan-Bhardwaj.jpg", mood: "Happy" },
        { title: "Chitta", artist: "From Shiddat", src: "Chitta - (Raag.Fm).mp3", image: "Shiddat-Movie-Manan-Bhardwaj.jpg", mood: "Happy" },
        { title: "Hum Dum", artist: "From Shiddat", src: "Hum Dum - (Raag.Fm).mp3", image: "Shiddat-Movie-Manan-Bhardwaj.jpg", mood: "Sad" },
        { title: "Jug Jug Jeeve", artist: "From Shiddat", src: "Jug Jug Jeeve - (Raag.Fm).mp3", image: "Shiddat-Movie-Manan-Bhardwaj.jpg", mood: "Happy" },
        { title: "Shiddat Reprise", artist: "From Shiddat", src: "Shiddat Reprise - (Raag.Fm).mp3", image: "Shiddat-Movie-Manan-Bhardwaj.jpg", mood: "Sad" },
        { title: "A Prayer", artist: "From Pagglait", src: "A Prayer - (Raag.Fm).mp3", image: "Pagglait-Arijit-Singh.jpg", mood: "Relax" },
        { title: "Dil Udd Ja Re Revisited", artist: "From Pagglait", src: "Dil Udd Ja Re Revisited - (Raag.Fm).mp3", image: "Pagglait-Arijit-Singh.jpg", mood: "Relax" },
        { title: "Loss Is All That Is Left", artist: "From Pagglait", src: "Loss Is All That Is Left - (Raag.Fm).mp3", image: "Pagglait-Arijit-Singh.jpg", mood: "Sad" },
        { title: "Phire Faqeera", artist: "From Pagglait", src: "Phire Faqeera - (Raag.Fm).mp3", image: "Pagglait-Arijit-Singh.jpg", mood: "Workout" },
        { title: "Thode Kam Ajnabi Reprise", artist: "From Pagglait", src: "Thode Kam Ajnabi Reprise Version - (Raag.Fm).mp3", image: "Pagglait-Arijit-Singh.jpg", mood: "Sad" },
        { title: "Tum Hi Ho", artist: "Arijit Singh", src: "Tum_He_Ho.mp3", image: "Arijit-Singh.jpg", mood: "Romantic" },
        { title: "Tose Naina", artist: "Arijit Singh", src: "Tose_Naina.mp3", image: "Arijit-Singh.jpg", mood: "Romantic" },
        { title: "Suno Na Sang Marmar", artist: "Arijit Singh", src: "Suno_Na_Sang_Marmar.mp3", image: "Arijit-Singh.jpg", mood: "Romantic" },
        { title: "Raabta", artist: "Arijit Singh", src: "Raabta.mp3", image: "Arijit-Singh.jpg", mood: "Romantic" },
        { title: "Mast Magan", artist: "Arijit Singh", src: "Mast_Magan.mp3", image: "Arijit-Singh.jpg", mood: "Romantic" },
        { title: "Love Me Thoda Aur", artist: "Arijit Singh", src: "Love_Me_Thoda_Aur.mp3", image: "Arijit-Singh.jpg", mood: "Romantic" },
        { title: "Kabira Encore", artist: "Arijit Singh", src: "Kabira_Encore.mp3", image: "Arijit-Singh.jpg", mood: "Romantic" },
        { title: "Kabhi Jo Badal Barsa", artist: "Arijit Singh", src: "Kabhi_Jo_Badal_Barsa.mp3", image: "Arijit-Singh.jpg", mood: "Romantic" },
        { title: "Ilahi", artist: "Arijit Singh", src: "Ilahi.mp3", image: "Arijit-Singh.jpg", mood: "Happy" },
        { title: "Duaa", artist: "Arijit Singh", src: "Duaa.mp3", image: "Arijit-Singh.jpg", mood: "Sad" },
        { title: "Barso Re", artist: "A.R. Rahman", src: "Barso_Re - (Raag.Fm).mp3", image: "ar rehman.jpeg", mood: "Happy" },
        { title: "Chhoti Si Aasha", artist: "A.R. Rahman", src: "Chhoti_Si_Aasha - (Raag.Fm).mp3", image: "ar rehman.jpeg", mood: "Happy" },
        { title: "Dheeme_Dheeme", artist: "A.R. Rahman", src: "Dheeme_Dheeme - (Raag.Fm).mp3", image: "ar rehman.jpeg", mood: "Relax" },
        { title: "Enna Sona", artist: "A.R. Rahman", src: "Enna_Sona - (Raag.Fm).mp3", image: "ar rehman.jpeg", mood: "Romantic" },
        { title: "Mitwa", artist: "A.R. Rahman", src: "Mitwa - (Raag.Fm).mp3", image: "ar rehman.jpeg", mood: "Romantic" },
        { title: "Muevelo", artist: "A.R. Rahman", src: "Muevelo - (Raag.Fm).mp3", image: "ar rehman.jpeg", mood: "Workout" },
        { title: "Oh Raaya", artist: "A.R. Rahman", src: "Oh_Raaya - (Raag.Fm).mp3", image: "ar rehman.jpeg", mood: "Workout" },
        { title: "Ok Jaanu", artist: "A.R. Rahman", src: "Ok_Jaanu - (Raag.Fm).mp3", image: "ar rehman.jpeg", mood: "Romantic" },
        { title: "Tum Tak", artist: "A.R. Rahman", src: "Tum_Tak - (Raag.Fm).mp3", image: "ar rehman.jpeg", mood: "Romantic" },
        { title: "Yeh Rishta", artist: "A.R. Rahman", src: "Yeh_Rishta - (Raag.Fm).mp3", image: "ar rehman.jpeg", mood: "Romantic" },
        { title: "Bas Tujhse Pyaar Ho", artist: "Armaan Malik", src: "Bas_Tujhse_Pyaar_Ho - (Raag.Fm).mp3", image: "Armaan-Malik.jpg", mood: "Romantic" },
        { title: "Chupke Chupke", artist: "Armaan Malik", src: "Chupke_Chupke - (Raag.Fm).mp3", image: "Armaan-Malik.jpg", mood: "Romantic" },
        { title: "De Taali", artist: "Armaan Malik", src: "De_Taali - (Raag.Fm).mp3", image: "Armaan-Malik.jpg", mood: "Happy" },
        { title: "Dil Malanga", artist: "Armaan Malik", src: "Dil_Malanga - (Raag.Fm).mp3", image: "Armaan-Malik.jpg", mood: "Happy" },
        { title: "Ghar", artist: "Armaan Malik", src: "Ghar - (Raag.Fm).mp3", image: "Armaan-Malik.jpg", mood: "Romantic" },
        { title: "Paas Aao", artist: "Armaan Malik", src: "Paas_Aao - (Raag.Fm).mp3", image: "Armaan-Malik.jpg", mood: "Romantic" },
        { title: "Roke Na Koi", artist: "Armaan Malik", src: "Roke_Na_Koi - (Raag.Fm).mp3", image: "Armaan-Malik.jpg", mood: "Sad" },
        { title: "Saanvarey", artist: "Armaan Malik", src: "Saanvarey - (Raag.Fm).mp3", image: "Armaan-Malik.jpg", mood: "Romantic" },
        { title: "Seven", artist: "Armaan Malik", src: "Seven - (Raag.Fm).mp3", image: "Armaan-Malik.jpg", mood: "Workout" },
        { title: "Sun Maahi", artist: "Armaan Malik", src: "Sun_Maahi - (Raag.Fm).mp3", image: "Armaan-Malik.jpg", mood: "Romantic" },
        { title: "Tumpe Mar Jaaenge", artist: "Palak Muchhal", src: "Tumpe_Mar_Jaaenge - (Raag.Fm).mp3", image: "Palak-Muchhal.jpg", mood: "Romantic" },
        { title: "Ab Tu Hi Tu", artist: "Palak Muchhal", src: "Ab_Tu_Hi_Tu - (Raag.Fm).mp3", image: "Palak-Muchhal.jpg", mood: "Romantic" },
        { title: "Bikul Socha Na", artist: "Palak Muchhal", src: "Bikul_Socha_Na - (Raag.Fm).mp3", image: "Palak-Muchhal.jpg", mood: "Happy" },
        { title: "Bandhan", artist: "Palak Muchhal", src: "Bandhan - (Raag.Fm).mp3", image: "Palak-Muchhal.jpg", mood: "Romantic" },
        { title: "Humdard", artist: "Palak Muchhal", src: "Humdard - (Raag.Fm).mp3", image: "Palak-Muchhal.jpg", mood: "Sad" },
        { title: "Kabir Most Wanted Munda", artist: "Palak Muchhal", src: "Kabir_Most_Wanted_Munda - (Raag.Fm).mp3", image: "Palak-Muchhal.jpg", mood: "Happy" },
        { title: "O Khuda", artist: "Palak Muchhal", src: "O_Khuda - (Raag.Fm).mp3", image: "Palak-Muchhal.jpg", mood: "Sad" },
        { title: "Saiyyan", artist: "Palak Muchhal", src: "Saiyyan - (Raag.Fm).mp3", image: "Palak-Muchhal.jpg", mood: "Romantic" },
        { title: "Tere Naina Mere Naino Se", artist: "Palak Muchhal", src: "Tere_Naina_Mere_Naino_Se - (Raag.Fm).mp3", image: "Palak-Muchhal.jpg", mood: "Romantic" },
        { title: "Tu Aa Jaana", artist: "Palak Muchhal", src: "Tu_Aa_Jaana - (Raag.Fm).mp3", image: "Palak-Muchhal.jpg", mood: "Romantic" },
        { title: "Dhol Bajaa", artist: "Darshan Raval", src: "Dhol_Bajaa - (Raag.Fm).mp3", image: "Darshan-Raval.jpg", mood: "Happy" },
        { title: "Duniya Chhor Doon", artist: "Darshan Raval", src: "Duniya_Chhor_Doon - (Raag.Fm).mp3", image: "Darshan-Raval.jpg", mood: "Romantic" },
        { title: "Jeeja", artist: "Darshan Raval", src: "Jeeja - (Raag.Fm).mp3", image: "Darshan-Raval.jpg", mood: "Happy" },
        { title: "Kinni Soni", artist: "Darshan Raval", src: "Kinni_Soni - (Raag.Fm).mp3", image: "Darshan-Raval.jpg", mood: "Romantic" },
        { title: "Mahiye Jinna Sohna", artist: "Darshan Raval", src: "Mahiye_Jinna_Sohna - (Raag.Fm).mp3", image: "Darshan-Raval.jpg", mood: "Romantic" },
        { title: "Mujhe Peene Do", artist: "Darshan Raval", src: "Mujhe_Peene_Do - (Raag.Fm).mp3", image: "Darshan-Raval.jpg", mood: "Sad" },
        { title: "Piya Re", artist: "Darshan Raval", src: "Piya_Re - (Raag.Fm).mp3", image: "Darshan-Raval.jpg", mood: "Romantic" },
        { title: "Saajan Ve", artist: "Darshan Raval", src: "Saajan_Ve - (Raag.Fm).mp3", image: "Darshan-Raval.jpg", mood: "Romantic" },
        { title: "Saari Ki Saari", artist: "Darshan Raval", src: "Saari_Ki_Saari - (Raag.Fm).mp3", image: "Darshan-Raval.jpg", mood: "Romantic" },
        { title: "Tera Naam", artist: "Darshan Raval", src: "Tera_Naam - (Raag.Fm).mp3", image: "Darshan-Raval.jpg", mood: "Romantic" },
        { title: "Tere Bin", artist: "Sonu Nigam", src: "Tere_Bin - (Raag.Fm).mp3", image: "Sonu-Nigam.jpg", mood: "Romantic" },
        { title: "Apni Si Lagti Hai", artist: "Sonu Nigam", src: "Apni_Si_Lagti_Hai - (Raag.Fm).mp3", image: "Sonu-Nigam.jpg", mood: "Romantic" },
        { title: "Deewane Hoke Hum", artist: "Sonu Nigam", src: "Deewane_Hoke_Hum - (Raag.Fm).mp3", image: "Sonu-Nigam.jpg", mood: "Romantic" },
        { title: "Kuchh Hua", artist: "Sonu Nigam", src: "Kuchh_Hua - (Raag.Fm).mp3", image: "Sonu-Nigam.jpg", mood: "Romantic" },
        { title: "Main Ki Karaan", artist: "Sonu Nigam", src: "Main_Ki_Karaan - (Raag.Fm).mp3", image: "Sonu-Nigam.jpg", mood: "Romantic" },
        { title: "Mere Siva", artist: "Sonu Nigam", src: "Mere_Siva - (Raag.Fm).mp3", image: "Sonu-Nigam.jpg", mood: "Romantic" },
        { title: "Meri Duniya Hai", artist: "Sonu Nigam", src: "Meri_Duniya_Hai - (Raag.Fm).mp3", image: "Sonu-Nigam.jpg", mood: "Romantic" },
        { title: "Mujhe Raat Din Bas", artist: "Sonu Nigam", src: "Mujhe_Raat_Din_Bas - (Raag.Fm).mp3", image: "Sonu-Nigam.jpg", mood: "Romantic" },
        { title: "Sun Zara", artist: "Sonu Nigam", src: "Sun_Zara - (Raag.Fm).mp3", image: "Sonu-Nigam.jpg", mood: "Romantic" },
        { title: "Tera Milna Pal Do Pal Ka", artist: "Sonu Nigam", src: "Tera_Milna_Pal_Do_Pal_Ka - (Raag.Fm).mp3", image: "Sonu-Nigam.jpg", mood: "Romantic" },
        { title: "Barso Re", artist: "Shreya Ghoshal", src: "Barso_Re - (Raag.Fm).mp3", image: "Shreya-Ghoshal.jpg", mood: "Happy" },
        { title: "Bahara", artist: "Shreya Ghoshal", src: "Bahara - (Raag.Fm).mp3", image: "Shreya-Ghoshal.jpg", mood: "Happy" },
        { title: "Chikni Chameli", artist: "Shreya Ghoshal", src: "Chikni_Chameli - (Raag.Fm).mp3", image: "Shreya-Ghoshal.jpg", mood: "Happy" },
        { title: "Aankhon_Mein_Neendeinr", artist: "Shreya Ghoshal", src: "Aankhon_Mein_Neendein - (Raag.Fm).mp3", image: "Shreya-Ghoshal.jpg", mood: "Happy" },
        { title: "Saibo", artist: "Shreya Ghoshal", src: "Saibo  - (Raag.Fm).mp3", image: "Shreya-Ghoshal.jpg", mood: "Happy" },
        { title: "Hasi", artist: "Shreya Ghoshal", src: "Hasi - (Raag.Fm).mp3", image: "Shreya-Ghoshal.jpg", mood: "Romantic" },
        { title: "Mohabbat_Se Mujhe", artist: "Shreya Ghoshal", src: " Mohabbat_Se  - (Raag.Fm).mp3", image: "Shreya-Ghoshal.jpg", mood: "Romantic" },
        { title: "Tequila_Wakila", artist: "Shreya Ghoshal", src: " Tequila_Wakila - (Raag.Fm).mp3", image: "Shreya-Ghoshal.jpg", mood: "Happy" },
        { title: "Mashallah", artist: "Shreya Ghoshal", src: "Mashallah - (Raag.Fm).mp3", image: "Shreya-Ghoshal.jpg", mood: "Happy" },
        { title: "Jhalla_Wallah", artist: "Shreya Ghoshal", src: "Jhalla_Wallah - (Raag.Fm).mp3", image: "Shreya-Ghoshal.jpg", mood: "Romantic" }
    ];


    let filteredSongs = songs.filter(song => 
        song.title.toLowerCase().includes(query) || song.artist.toLowerCase().includes(query)
    );

    if (filteredSongs.length === 0) {
        noResultsMessage.style.display = "block";
        return;
    } else {
        noResultsMessage.style.display = "none";
    }

    filteredSongs.forEach(song => {
        let li = document.createElement("li");
        li.innerHTML = `<img src="${song.image}" alt="${song.title}" class="song-img">
                        <div class="song-info">
                            <p class="song-title">${song.title}</p>
                            <p class="song-artist">${song.artist}</p>
                        </div>`;
        
        li.addEventListener("click", () => {
            audioPlayer.src = song.src;
            audioPlayer.play();
            currentSongIndex = songs.indexOf(song);
        });

        resultsList.appendChild(li);
    });
}

function filterByMood(mood) {
    let resultsContainer = document.querySelector(".results-container");
    let resultsList = document.querySelector(".results-container ul");
    let noResultsMessage = document.querySelector(".no-results-message");
    let audioPlayer = document.getElementById("audioPlayer"); // Audio Player 

    resultsList.innerHTML = "";

    const songs = [
        { title: "Barbaadiyan", artist: "From Shiddat", src: "Barbaadiyan - (Raag.Fm).mp3", image: "Shiddat-Movie-Manan-Bhardwaj.jpg", mood: "Happy" },
        { title: "Chitta", artist: "From Shiddat", src: "Chitta - (Raag.Fm).mp3", image: "Shiddat-Movie-Manan-Bhardwaj.jpg", mood: "Happy" },
        { title: "Hum Dum", artist: "From Shiddat", src: "Hum Dum - (Raag.Fm).mp3", image: "Shiddat-Movie-Manan-Bhardwaj.jpg", mood: "Sad" },
        { title: "Jug Jug Jeeve", artist: "From Shiddat", src: "Jug Jug Jeeve - (Raag.Fm).mp3", image: "Shiddat-Movie-Manan-Bhardwaj.jpg", mood: "Happy" },
        { title: "Shiddat Reprise", artist: "From Shiddat", src: "Shiddat Reprise - (Raag.Fm).mp3", image: "Shiddat-Movie-Manan-Bhardwaj.jpg", mood: "Sad" },
        { title: "A Prayer", artist: "From Pagglait", src: "A Prayer - (Raag.Fm).mp3", image: "Pagglait-Arijit-Singh.jpg", mood: "Relax" },
        { title: "Dil Udd Ja Re Revisited", artist: "From Pagglait", src: "Dil Udd Ja Re Revisited - (Raag.Fm).mp3", image: "Pagglait-Arijit-Singh.jpg", mood: "Relax" },
        { title: "Loss Is All That Is Left", artist: "From Pagglait", src: "Loss Is All That Is Left - (Raag.Fm).mp3", image: "Pagglait-Arijit-Singh.jpg", mood: "Sad" },
        { title: "Phire Faqeera", artist: "From Pagglait", src: "Phire Faqeera - (Raag.Fm).mp3", image: "Pagglait-Arijit-Singh.jpg", mood: "Workout" },
        { title: "Thode Kam Ajnabi Reprise", artist: "From Pagglait", src: "Thode Kam Ajnabi Reprise Version - (Raag.Fm).mp3", image: "Pagglait-Arijit-Singh.jpg", mood: "Sad" },
        { title: "Tum Hi Ho", artist: "Arijit Singh", src: "Tum_He_Ho.mp3", image: "Arijit-Singh.jpg", mood: "Romantic" },
        { title: "Tose Naina", artist: "Arijit Singh", src: "Tose_Naina.mp3", image: "Arijit-Singh.jpg", mood: "Romantic" },
        { title: "Suno Na Sang Marmar", artist: "Arijit Singh", src: "Suno_Na_Sang_Marmar.mp3", image: "Arijit-Singh.jpg", mood: "Romantic" },
        { title: "Raabta", artist: "Arijit Singh", src: "Raabta.mp3", image: "Arijit-Singh.jpg", mood: "Romantic" },
        { title: "Mast Magan", artist: "Arijit Singh", src: "Mast_Magan.mp3", image: "Arijit-Singh.jpg", mood: "Romantic" },
        { title: "Love Me Thoda Aur", artist: "Arijit Singh", src: "Love_Me_Thoda_Aur.mp3", image: "Arijit-Singh.jpg", mood: "Romantic" },
        { title: "Kabira Encore", artist: "Arijit Singh", src: "Kabira_Encore.mp3", image: "Arijit-Singh.jpg", mood: "Romantic" },
        { title: "Kabhi Jo Badal Barsa", artist: "Arijit Singh", src: "Kabhi_Jo_Badal_Barsa.mp3", image: "Arijit-Singh.jpg", mood: "Romantic" },
        { title: "Ilahi", artist: "Arijit Singh", src: "Ilahi.mp3", image: "Arijit-Singh.jpg", mood: "Happy" },
        { title: "Duaa", artist: "Arijit Singh", src: "Duaa.mp3", image: "Arijit-Singh.jpg", mood: "Sad" },
        { title: "Barso Re", artist: "A.R. Rahman", src: "Barso_Re - (Raag.Fm).mp3", image: "ar rehman.jpeg", mood: "Happy" },
        { title: "Chhoti Si Aasha", artist: "A.R. Rahman", src: "Chhoti_Si_Aasha - (Raag.Fm).mp3", image: "ar rehman.jpeg", mood: "Happy" },
        { title: "Dheeme Dheeme", artist: "A.R. Rahman", src: "Dheeme_Dheeme  - (Raag.Fm).mp3", image: "ar rehman.jpeg", mood: "Relax" },
        { title: "Enna Sona", artist: "A.R. Rahman", src: "Enna_Sona - (Raag.Fm).mp3", image: "ar rehman.jpeg", mood: "Romantic" },
        { title: "Mitwa", artist: "A.R. Rahman", src: "Mitwa - (Raag.Fm).mp3", image: "ar rehman.jpeg", mood: "Romantic" },
        { title: "Muevelo", artist: "A.R. Rahman", src: "Muevelo - (Raag.Fm).mp3", image: "ar rehman.jpeg", mood: "Workout" },
        { title: "Oh Raaya", artist: "A.R. Rahman", src: "Oh_Raaya - (Raag.Fm).mp3", image: "ar rehman.jpeg", mood: "Workout" },
        { title: "Ok Jaanu", artist: "A.R. Rahman", src: "Ok_Jaanu - (Raag.Fm).mp3", image: "ar rehman.jpeg", mood: "Romantic" },
        { title: "Tum Tak", artist: "A.R. Rahman", src: "Tum_Tak - (Raag.Fm).mp3", image: "ar rehman.jpeg", mood: "Romantic" },
        { title: "Yeh Rishta", artist: "A.R. Rahman", src: "Yeh_Rishta - (Raag.Fm).mp3", image: "ar rehman.jpeg", mood: "Romantic" },
        { title: "Bas Tujhse Pyaar Ho", artist: "Armaan Malik", src: "Bas_Tujhse_Pyaar_Ho - (Raag.Fm).mp3", image: "Armaan-Malik.jpg", mood: "Romantic" },
        { title: "Chupke Chupke", artist: "Armaan Malik", src: "Chupke_Chupke - (Raag.Fm).mp3", image: "Armaan-Malik.jpg", mood: "Romantic" },
        { title: "De Taali", artist: "Armaan Malik", src: "De_Taali - (Raag.Fm).mp3", image: "Armaan-Malik.jpg", mood: "Happy" },
        { title: "Dil Malanga", artist: "Armaan Malik", src: "Dil_Malanga - (Raag.Fm).mp3", image: "Armaan-Malik.jpg", mood: "Happy" },
        { title: "Ghar", artist: "Armaan Malik", src: "Ghar - (Raag.Fm).mp3", image: "Armaan-Malik.jpg", mood: "Romantic" },
        { title: "Paas Aao", artist: "Armaan Malik", src: "Paas_Aao - (Raag.Fm).mp3", image: "Armaan-Malik.jpg", mood: "Romantic" },
        { title: "Roke Na Koi", artist: "Armaan Malik", src: "Roke_Na_Koi - (Raag.Fm).mp3", image: "Armaan-Malik.jpg", mood: "Sad" },
        { title: "Saanvarey", artist: "Armaan Malik", src: "Saanvarey - (Raag.Fm).mp3", image: "Armaan-Malik.jpg", mood: "Romantic" },
        { title: "Seven", artist: "Armaan Malik", src: "Seven - (Raag.Fm).mp3", image: "Armaan-Malik.jpg", mood: "Workout" },
        { title: "Sun Maahi", artist: "Armaan Malik", src: "Sun_Maahi - (Raag.Fm).mp3", image: "Armaan-Malik.jpg", mood: "Romantic" },
        { title: "Tumpe Mar Jaaenge", artist: "Palak Muchhal", src: "Tumpe_Mar_Jaaenge - (Raag.Fm).mp3", image: "Palak-Muchhal.jpg", mood: "Romantic" },
        { title: "Ab Tu Hi Tu", artist: "Palak Muchhal", src: "Ab_Tu_Hi_Tu - (Raag.Fm).mp3", image: "Palak-Muchhal.jpg", mood: "Romantic" },
        { title: "Bikul Socha Na", artist: "Palak Muchhal", src: "Bikul_Socha_Na - (Raag.Fm).mp3", image: "Palak-Muchhal.jpg", mood: "Happy" },
        { title: "Bandhan", artist: "Palak Muchhal", src: "Bandhan - (Raag.Fm).mp3", image: "Palak-Muchhal.jpg", mood: "Romantic" },
        { title: "Humdard", artist: "Palak Muchhal", src: "Humdard - (Raag.Fm).mp3", image: "Palak-Muchhal.jpg", mood: "Sad" },
        { title: "Kabir Most Wanted Munda", artist: "Palak Muchhal", src: "Kabir_Most_Wanted_Munda - (Raag.Fm).mp3", image: "Palak-Muchhal.jpg", mood: "Happy" },
        { title: "O Khuda", artist: "Palak Muchhal", src: "O_Khuda - (Raag.Fm).mp3", image: "Palak-Muchhal.jpg", mood: "Sad" },
        { title: "Saiyyan", artist: "Palak Muchhal", src: "Saiyyan - (Raag.Fm).mp3", image: "Palak-Muchhal.jpg", mood: "Romantic" },
        { title: "Tere Naina Mere Naino Se", artist: "Palak Muchhal", src: "Tere_Naina_Mere_Naino_Se - (Raag.Fm).mp3", image: "Palak-Muchhal.jpg", mood: "Romantic" },
        { title: "Tu Aa Jaana", artist: "Palak Muchhal", src: "Tu_Aa_Jaana - (Raag.Fm).mp3", image: "Palak-Muchhal.jpg", mood: "Romantic" },
        { title: "Dhol Bajaa", artist: "Darshan Raval", src: "Dhol_Bajaa - (Raag.Fm).mp3", image: "Darshan-Raval.jpg", mood: "Happy" },
        { title: "Duniya Chhor Doon", artist: "Darshan Raval", src: "Duniya_Chhor_Doon - (Raag.Fm).mp3", image: "Darshan-Raval.jpg", mood: "Romantic" },
        { title: "Jeeja", artist: "Darshan Raval", src: "Jeeja - (Raag.Fm).mp3", image: "Darshan-Raval.jpg", mood: "Happy" },
        { title: "Kinni Soni", artist: "Darshan Raval", src: "Kinni_Soni - (Raag.Fm).mp3", image: "Darshan-Raval.jpg", mood: "Romantic" },
        { title: "Mahiye Jinna Sohna", artist: "Darshan Raval", src: "Mahiye_Jinna_Sohna - (Raag.Fm).mp3", image: "Darshan-Raval.jpg", mood: "Romantic" },
        { title: "Mujhe Peene Do", artist: "Darshan Raval", src: "Mujhe_Peene_Do - (Raag.Fm).mp3", image: "Darshan-Raval.jpg", mood: "Sad" },
        { title: "Piya Re", artist: "Darshan Raval", src: "Piya_Re - (Raag.Fm).mp3", image: "Darshan-Raval.jpg", mood: "Romantic" },
        { title: "Saajan Ve", artist: "Darshan Raval", src: "Saajan_Ve - (Raag.Fm).mp3", image: "Darshan-Raval.jpg", mood: "Romantic" },
        { title: "Saari Ki Saari", artist: "Darshan Raval", src: "Saari_Ki_Saari - (Raag.Fm).mp3", image: "Darshan-Raval.jpg", mood: "Romantic" },
        { title: "Tera Naam", artist: "Darshan Raval", src: "Tera_Naam - (Raag.Fm).mp3", image: "Darshan-Raval.jpg", mood: "Romantic" },
        { title: "Tere Bin", artist: "Sonu Nigam", src: "Tere_Bin - (Raag.Fm).mp3", image: "Sonu-Nigam.jpg", mood: "Romantic" },
        { title: "Apni Si Lagti Hai", artist: "Sonu Nigam", src: "Apni_Si_Lagti_Hai - (Raag.Fm).mp3", image: "Sonu-Nigam.jpg", mood: "Romantic" },
        { title: "Deewane Hoke Hum", artist: "Sonu Nigam", src: "Deewane_Hoke_Hum - (Raag.Fm).mp3", image: "Sonu-Nigam.jpg", mood: "Romantic" },
        { title: "Kuchh Hua", artist: "Sonu Nigam", src: "Kuchh_Hua - (Raag.Fm).mp3", image: "Sonu-Nigam.jpg", mood: "Romantic" },
        { title: "Main Ki Karaan", artist: "Sonu Nigam", src: "Main_Ki_Karaan - (Raag.Fm).mp3", image: "Sonu-Nigam.jpg", mood: "Romantic" },
        { title: "Mere Siva", artist: "Sonu Nigam", src: "Mere_Siva - (Raag.Fm).mp3", image: "Sonu-Nigam.jpg", mood: "Romantic" },
        { title: "Meri Duniya Hai", artist: "Sonu Nigam", src: "Meri_Duniya_Hai - (Raag.Fm).mp3", image: "Sonu-Nigam.jpg", mood: "Romantic" },
        { title: "Mujhe Raat Din Bas", artist: "Sonu Nigam", src: "Mujhe_Raat_Din_Bas - (Raag.Fm).mp3", image: "Sonu-Nigam.jpg", mood: "Romantic" },
        { title: "Sun Zara", artist: "Sonu Nigam", src: "Sun_Zara - (Raag.Fm).mp3", image: "Sonu-Nigam.jpg", mood: "Romantic" },
        { title: "Tera Milna Pal Do Pal Ka", artist: "Sonu Nigam", src: "Tera_Milna_Pal_Do_Pal_Ka - (Raag.Fm).mp3", image: "Sonu-Nigam.jpg", mood: "Romantic" },
        { title: "Barso Re", artist: "Shreya Ghoshal", src: "Barso_Re - (Raag.Fm).mp3", image: "Shreya-Ghoshal.jpg", mood: "Happy" },
        { title: "Bahara", artist: "Shreya Ghoshal", src: "Bahara - (Raag.Fm).mp3", image: "Shreya-Ghoshal.jpg", mood: "Happy" },
        { title: "Chikni Chameli", artist: "Shreya Ghoshal", src: "Chikni_Chameli - (Raag.Fm).mp3", image: "Shreya-Ghoshal.jpg", mood: "Happy" },
        { title: "Aankhon_Mein_Neendeinr", artist: "Shreya Ghoshal", src: "Aankhon_Mein_Neendein - (Raag.Fm).mp3", image: "Shreya-Ghoshal.jpg", mood: "Happy" },
        { title: "Saibo", artist: "Shreya Ghoshal", src: "Saibo  - (Raag.Fm).mp3", image: "Shreya-Ghoshal.jpg", mood: "Happy" },
        { title: "Hasi", artist: "Shreya Ghoshal", src: "Hasi - (Raag.Fm).mp3", image: "Shreya-Ghoshal.jpg", mood: "Romantic" },
        { title: "Mohabbat_Se Mujhe", artist: "Shreya Ghoshal", src: " Mohabbat_Se  - (Raag.Fm).mp3", image: "Shreya-Ghoshal.jpg", mood: "Romantic" },
        { title: "Tequila_Wakila", artist: "Shreya Ghoshal", src: " Tequila_Wakila - (Raag.Fm).mp3", image: "Shreya-Ghoshal.jpg", mood: "Happy" },
        { title: "Mashallah", artist: "Shreya Ghoshal", src: "Mashallah - (Raag.Fm).mp3", image: "Shreya-Ghoshal.jpg", mood: "Happy" },
        { title: "Jhalla_Wallah", artist: "Shreya Ghoshal", src: "Jhalla_Wallah - (Raag.Fm).mp3", image: "Shreya-Ghoshal.jpg", mood: "Romantic" }
    ];

    const filteredSongs = songs.filter(song => song.mood === mood);

    if (filteredSongs.length === 0) {
        noResultsMessage.style.display = "block";
        return;
    } else {
        noResultsMessage.style.display = "none";
    }

    filteredSongs.forEach(song => {
        let li = document.createElement("li");
        li.innerHTML = `<img src="${song.image}" alt="${song.title}" class="song-img">
                        <div class="song-info">
                            <p class="song-title">${song.title}</p>
                            <p class="song-artist">${song.artist}</p>
                        </div>`;
        
        li.addEventListener("click", () => {
            audioPlayer.src = song.src;
            audioPlayer.play();
            currentSongIndex = songs.indexOf(song);
        });

        resultsList.appendChild(li);
    });
}
