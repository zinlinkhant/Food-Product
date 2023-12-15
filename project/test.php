<?php
require '../component/header.php'
?>
<style>
.flip-carousel {
    perspective: 1000px;
    width: 300px;
    /* Adjust the width of the carousel */
    margin: auto;
}

.flip-carousel-inner {
    display: flex;
    transition: transform 0.6s;
    transform-style: preserve-3d;
}

.flip-carousel-item {
    flex: 0 0 100%;
    margin-right: 1rem;
    /* Adjust the spacing between carousel items */
}

.flip-carousel-inner:hover {
    transform: rotateY(-90deg);
}

.flip-card {
    width: 100%;
    height: 200px;
    /* Adjust the height of the cards */
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transform-style: preserve-3d;
    transition: transform 0.6s;
}

.flip-card:hover {
    transform: rotateY(180deg);
}

.flip-card-front,
.flip-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.flip-card-front {
    transform: rotateY(0deg);
}

.flip-card-back {
    transform: rotateY(180deg);
}
</style>


<div class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="flip-carousel">
        <div class="flip-carousel-inner">
            <!-- Carousel Item 1 -->
            <div class="flip-carousel-item">
                <div class="flip-card">
                    <div class="flip-card-front bg-blue-200">
                        <p class="text-xl font-bold">Front Side 1</p>
                    </div>
                    <div class="flip-card-back bg-green-200">
                        <p class="text-xl font-bold">Back Side 1</p>
                    </div>
                </div>
            </div>

            <!-- Carousel Item 2 -->
            <div class="flip-carousel-item">
                <div class="flip-card">
                    <div class="flip-card-front bg-yellow-200">
                        <p class="text-xl font-bold">Front Side 2</p>
                    </div>
                    <div class="flip-card-back bg-pink-200">
                        <p class="text-xl font-bold">Back Side 2</p>
                    </div>
                </div>
            </div>

            <!-- Add more carousel items as needed -->
        </div>
    </div>

</div>