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
</style>
