<style>
    * {
  box-sizing: border-box;
}

body {
  background-color:  #13161C;
}

@keyframes scaleUpDown {
  0%,
  100% {
    transform: scaleY(1) scaleX(1);
  }
  50%,
  90% {
    transform: scaleY(1.1);
  }
  75% {
    transform: scaleY(0.95);
  }
  80% {
    transform: scaleX(0.95);
  }
}

@keyframes shake {
  0%,
  100% {
    transform: skewX(0) scale(1);
  }
  50% {
    transform: skewX(5deg) scale(0.9);
  }
}

@keyframes particleUp {
  0% {
    opacity: 0;
  }
  20% {
    opacity: 1;
  }
  80% {
    opacity: 1;
  }
  100% {
    opacity: 0;
    top: -100%;
    transform: scale(0.5);
  }
}

@keyframes glow {
  0%,
  100% {
    background-color: #ef5a00;
  }
  50% {
    background-color: #ff7800;
  }
}

.fire {
  position: absolute;
  top: calc(50% - 50px);
  left: calc(50% - 50px);
  width: 100px;
  height: 100px;
  background-color: transparent;
  margin-left: auto;
  margin-right: auto;
}

.fire-center {
  position: absolute;
  height: 100%;
  width: 100%;
  animation: scaleUpDown 3s ease-out;
  animation-iteration-count: infinite;
  animation-fill-mode: both;

  .main-fire {
    position: absolute;
    width: 100%;
    height: 100%;
    background-image: radial-gradient(
      farthest-corner at 10px 0,
      #d43300 0%,
      #ef5a00 95%
    );
    transform: scaleX(0.8) rotate(45deg);
    border-radius: 0 40% 60% 40%;
    filter: drop-shadow(0 0 10px #d43322);
  }

  .particle-fire {
    position: absolute;
    top: 60%;
    left: 45%;
    width: 10px;
    height: 10px;
    background-color: #ef5a00;
    border-radius: 50%;
    filter: drop-shadow(0 0 10px #d43322);
    animation: particleUp 2s ease-out 0;
    animation-iteration-count: infinite;
    animation-fill-mode: both;
  }
}

.fire-right {
  height: 100%;
  width: 100%;
  position: absolute;
  animation: shake 2s ease-out 0;
  animation-iteration-count: infinite;
  animation-fill-mode: both;

  .main-fire {
    position: absolute;
    top: 15%;
    right: -25%;
    width: 80%;
    height: 80%;
    background-color: #ef5a00;
    transform: scaleX(0.8) rotate(45deg);
    border-radius: 0 40% 60% 40%;
    filter: drop-shadow(0 0 10px #d43322);
  }

  .particle-fire {
    position: absolute;
    top: 45%;
    left: 50%;
    width: 15px;
    height: 15px;
    background-color: #ef5a00;
    transform: scaleX(0.8) rotate(45deg);
    border-radius: 50%;
    filter: drop-shadow(0 0 10px #d43322);
    animation: particleUp 2s ease-out 0;
    animation-iteration-count: infinite;
    animation-fill-mode: both;
  }
}

.fire-left {
  position: absolute;
  height: 100%;
  width: 100%;
  animation: shake 3s ease-out 0;
  animation-iteration-count: infinite;
  animation-fill-mode: both;

  .main-fire {
    position: absolute;
    top: 15%;
    left: -20%;
    width: 80%;
    height: 80%;
    background-color: #ef5a00;
    transform: scaleX(0.8) rotate(45deg);
    border-radius: 0 40% 60% 40%;
    filter: drop-shadow(0 0 10px #d43322);
  }

  .particle-fire {
    position: absolute;
    top: 10%;
    left: 20%;
    width: 10%;
    height: 10%;
    background-color: #ef5a00;
    border-radius: 50%;
    filter: drop-shadow(0 0 10px #d43322);
    animation: particleUp 3s infinite ease-out 0;
    animation-fill-mode: both;
  }
}

.fire-bottom .main-fire {
  position: absolute;
  top: 30%;
  left: 20%;
  width: 75%;
  height: 75%;
  background-color: #ff7800;
  transform: scaleX(0.8) rotate(45deg);
  border-radius: 0 40% 100% 40%;
  filter: blur(10px);
  animation: glow 2s ease-out 0;
  animation-iteration-count: infinite;
  animation-fill-mode: both;
}

</style>

<di vclass="hero">
    <!-- <img class="hero-image" src="{{ asset('images/splash/LOGO3.png') }}"></img> -->
    <div class="fire-wrapper">
        <div class="fire">
            <!-- <div class="fire-left">
                <div class="main-fire"></div>
                <div class="particle-fire"></div>
            </div> -->
            <div class="fire-center">
                <div class="main-fire"></div>
                <div class="particle-fire"></div>
            </div>
            <!-- <div class="fire-right">
                <div class="main-fire"></div>
                <div class="particle-fire"></div>
            </div> -->
            <div class="fire-bottom">
                <div class="main-fire"></div>
            </div>
        </div>
    </div>
</div>
