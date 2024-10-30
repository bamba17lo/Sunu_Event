@extends('index')

@section('content')
    <div class="container-fluid">
        <!-- Card Container -->
        <div class="category-card text-center">
            <!-- Content Section (Texte à gauche) -->
            <div class="category-content">
                <h1>Evénement Musique et Culture</h1>
            </div>
            <!-- Image Section (Image à droite) -->
            <img src="https://i0.wp.com/africtelegraph.com/wp-content/uploads/2017/07/Youssou-Ndour-un-artiste-s%C3%A9n%C3%A9galais.jpg?fit=1000%2C665&ssl=1"
                alt="Image de Musique et Culture" class="category-image">
        </div>
    </div>

    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <p class="text-2xl text-blue-700 dark:text-white">Les événements populaires</p>

        <a href="#" class="event-card">
            <!-- Image Section -->
            <img src="https://i0.wp.com/africtelegraph.com/wp-content/uploads/2017/07/Youssou-Ndour-un-artiste-s%C3%A9n%C3%A9galais.jpg?fit=1000%2C665&ssl=1"
                alt="Image de l'événement" class="event-image">

            <!-- Content Section -->
            <div class="event-info">
                <!-- Ticket Alert Section -->
                <div class="ticket-alert">
                    {{-- <p class="almost-sold-out">Quasi complet !</p> --}}
                    <!-- Ou bien -->
                     <p class="sold-out">Tickets épuisés</p> 
                </div>
                <h2 class="event-title">Concert Youssou Ndour</h2>
                <p class="event-date">24 Octobre 2024</p>
                <p class="event-location">Dakar Arena, Sénégal</p>
            </div>
        </a>
        <div class="event-card">
            <!-- Image Section -->
            <img src="https://i0.wp.com/africtelegraph.com/wp-content/uploads/2017/07/Youssou-Ndour-un-artiste-s%C3%A9n%C3%A9galais.jpg?fit=1000%2C665&ssl=1"
                alt="Image de l'événement" class="event-image">

            <!-- Content Section -->
            <div class="event-info">
                <!-- Ticket Alert Section -->
                <div class="ticket-alert">
                    <p class="almost-sold-out">Quasi complet !</p>
                    <!-- Ou bien -->
                    <!-- <p class="sold-out">Tickets épuisés</p> -->
                </div>
                <h2 class="event-title">Concert Youssou Ndour</h2>
                <p class="event-date">24 Octobre 2024</p>
                <p class="event-location">Dakar Arena, Sénégal</p>
            </div>
        </div>
        <div class="event-card">
            <!-- Image Section -->
            <img src="https://i0.wp.com/africtelegraph.com/wp-content/uploads/2017/07/Youssou-Ndour-un-artiste-s%C3%A9n%C3%A9galais.jpg?fit=1000%2C665&ssl=1"
                alt="Image de l'événement" class="event-image">

            <!-- Content Section -->
            <div class="event-info">
                <!-- Ticket Alert Section -->
                <div class="ticket-alert">
                    <p class="almost-sold-out">Quasi complet !</p>
                    <!-- Ou bien -->
                    <!-- <p class="sold-out">Tickets épuisés</p> -->
                </div>
                <h2 class="event-title">Concert Youssou Ndour</h2>
                <p class="event-date">24 Octobre 2024</p>
                <p class="event-location">Dakar Arena, Sénégal</p>
            </div>
        </div>
        <div class="event-card">
            <!-- Image Section -->
            <img src="https://i0.wp.com/africtelegraph.com/wp-content/uploads/2017/07/Youssou-Ndour-un-artiste-s%C3%A9n%C3%A9galais.jpg?fit=1000%2C665&ssl=1"
                alt="Image de l'événement" class="event-image">

            <!-- Content Section -->
            <div class="event-info">
                <!-- Ticket Alert Section -->
                <div class="ticket-alert">
                    {{-- <p class="almost-sold-out">Quasi complet !</p> --}}
                    <!-- Ou bien -->
                    <p class="sold-out">Tickets épuisés</p>
                </div>
                <h2 class="event-title">Concert Youssou Ndour</h2>
                <p class="event-date">24 Octobre 2024</p>
                <p class="event-location">Dakar Arena, Sénégal</p>
            </div>
        </div>
        <div class="event-card">
            <!-- Image Section -->
            <img src="https://i0.wp.com/africtelegraph.com/wp-content/uploads/2017/07/Youssou-Ndour-un-artiste-s%C3%A9n%C3%A9galais.jpg?fit=1000%2C665&ssl=1"
                alt="Image de l'événement" class="event-image">

            <!-- Content Section -->
            <div class="event-info">
                <!-- Ticket Alert Section -->
                <div class="ticket-alert">
                    <p class="almost-sold-out">Quasi complet !</p>
                    <!-- Ou bien -->
                    <!-- <p class="sold-out">Tickets épuisés</p> -->
                </div>
                <h2 class="event-title">Concert Youssou Ndour</h2>
                <p class="event-date">24 Octobre 2024</p>
                <p class="event-location">Dakar Arena, Sénégal</p>
            </div>
        </div>
        <div class="event-card">
            <!-- Image Section -->
            <img src="https://i0.wp.com/africtelegraph.com/wp-content/uploads/2017/07/Youssou-Ndour-un-artiste-s%C3%A9n%C3%A9galais.jpg?fit=1000%2C665&ssl=1"
                alt="Image de l'événement" class="event-image">

            <!-- Content Section -->
            <div class="event-info">
                <!-- Ticket Alert Section -->
                <div class="ticket-alert">
                    <p class="almost-sold-out">Quasi complet !</p>
                    <!-- Ou bien -->
                    <!-- <p class="sold-out">Tickets épuisés</p> -->
                </div>
                <h2 class="event-title">Concert Youssou Ndour</h2>
                <p class="event-date">24 Octobre 2024</p>
                <p class="event-location">Dakar Arena, Sénégal</p>
            </div>
        </div>

    </div>
@endsection
<style>
    .category-card {
        background-color: #ffcc00;
        /* Couleur de fond */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        max-width: 100%;
        margin: 10px auto;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .category-title {
        background-color: #333;
        color: #ffcc00;
        font-size: 28px;
        font-weight: bold;
        padding: 15px;
        border-radius: 8px 8px 0 0;
        text-align: center;
    }

    .category-content {
        flex: 1;
        padding-right: 20px;
    }

    .category-content h1 {
        font-size: 36px;
        /* Taille du texte augmentée */
        color: #333;
        font-weight: bold;
        /* Rend le texte bold */
    }

    .category-image {
        width: 100%;
        max-width: 400px;
        border-radius: 8px;
    }

    @media (max-width: 768px) {
        .category-card {
            flex-direction: column;
            text-align: center;
        }

        .category-content {
            padding-right: 0;
            margin-bottom: 20px;
        }

        .category-image {
            max-width: 100%;
        }
    }

    .event-card {
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: 23%; /* Ajuste la taille pour 4 cartes par ligne */
    margin: 10px;
    display: inline-block;
    vertical-align: top;
}

.event-image {
    width: 100%;
    height: 120px; /* Limite la hauteur de l'image */
    object-fit: cover;
}

.event-info {
    padding: 10px;
    text-align: left;
}

.event-title {
    font-size: 16px;
    font-weight: bold;
    color: #333;
    margin-bottom: 5px;
}

.event-date,
.event-location {
    font-size: 12px;
    color: #232323;
}

.ticket-alert {
    margin-top: 10px;
    font-size: 14px;
    font-weight: bold;
    color: #fff;
}

.almost-sold-out {
    background-color: #ff9800;
    padding: 5px;
    border-radius: 4px;
}

.sold-out {
    background-color: #f44336;
    padding: 5px;
    border-radius: 4px;
}

</style>
