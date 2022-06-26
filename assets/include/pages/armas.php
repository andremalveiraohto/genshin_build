<style>
  body {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }
/*LOADER*/
#loading {
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}
#loading .box {
  width: 170px;
  height: 170px;
  background-color: #252525;
  border-radius: 0.8rem;
  display: flex;
  justify-content: center;
  align-items: center;
}

.spinner {
  border-color: #fff;
  display: inline-block;
	width: 3.5rem;
	height: 3.5rem;
	color: inherit;
	vertical-align: middle;
	pointer-events: none;
	border: .3em solid #fff;
	border-bottom-color: transparent;
	border-radius: 50%;
	animation: 1s spinner linear infinite;
	position: relative;
}

@keyframes spinner {
	0% {
		transform: rotate(0deg);
	}
	100% {
		transform: rotate(360deg);
	}
}


</style>

<div id="loading"></div>