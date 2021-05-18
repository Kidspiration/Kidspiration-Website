@extends('layout/master')
@section('title','Quiz Result')

@section('content')
    <style>
        body {
            background-image: linear-gradient(rgba(255, 255, 255, 0.750),rgba(255, 255, 255, 0.534)), url(/img/bg4.jpg);
            background-position: center;


        }

      .main {
        position: relative;
        margin-left: 0vh; /* Same as the width of the sidenav */
        font-size: 28px; /* Increased text to enable scrolling */
        padding: 0px 0px;
        top: 3vh;
        left: 7vh;
        right: 10vh;

        box-sizing: border-box;

      }

      .main .content {
          max-width: 155vh;
          margin-bottom: 5vh;
      }

      .main .content .quiz {
        display: block;
        margin-bottom: 20px;
        margin-right: 3vh;
        text-align: left;
        padding-left: 40px;
        padding-right: 40vh;
        padding-top: 30px;
        padding-bottom: 30px;
        border: 1px solid rgb(78, 175, 255);
        border-radius: 1vh;
        background: white;
        color: rgb(78, 175, 255);
      }

      .main .content .quiz:hover {
        background: rgb(78, 175, 255);
        color: white;
      }

      .main .content .edit {
          margin-right: 3vh;
          padding-left: 3vh;
          padding-right: 3vh;
          padding-top: 1vh;
          padding-bottom: 1vh;
          border: 1px solid rgb(78, 175, 255);
          background: rgb(78, 175, 255);
          color: white;
      }

      .main .content .edit:hover {
        background: white;
        color: rgb(78, 175, 255);
      }

      .main .content .delete {
            padding-left: 2vh;
            padding-right: 2vh;
            padding-top: 1vh;
            padding-bottom: 1vh;
            border: 1px solid rgb(78, 175, 255);
            background: rgb(78, 175, 255);
            color: white;
      }

      .main .content .delete:hover {
        background: white;
        color: rgb(78, 175, 255);
      }

      .main .content .add {
            padding-left: 2vh;
            padding-right: 2vh;
            padding-top: 1vh;
            padding-bottom: 1vh;
            border: 1px solid rgb(78, 175, 255);
            background: rgb(78, 175, 255);
            color: white;
            margin-bottom: 3vh;
      }

      .main .content .add:hover {
        background: white;
        color: rgb(78, 175, 255);
      }

      .progress {
  width: 45vh;
  height: 45vh;
  line-height: 45vh;
  background: none;
  box-shadow: none;
  margin-top: 7vh;
  display: block;
    position: relative;
    left: 50%;
}

.bottombar .quizzes {
        color: #ffffff;
    }

.progress:after {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  border: 5px solid #efefef;
  position: absolute;
  top: 0;
  left: 0;
}
.progress > span {
  width: 50%;
  height: 100%;
  overflow: hidden;
  position: absolute;
  top: 0;
  z-index: 1;
}
.progress .progress-left {
  left: 0;
}
.progress .progress-bar {
  width: 100%;
  height: 100%;
  background: none;
  border-width: 3vh;
  border-style: solid;
  position: absolute;
  top: 0;
  border-color: rgb(78, 175, 255);
}
.progress .progress-left .progress-bar {
  left: 100%;
  border-top-right-radius: 50vh;
  border-bottom-right-radius: 50vh;
  border-left: 0;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}
.progress .progress-right {
  right: 0;
}
.progress .progress-right .progress-bar {
  left: -100%;
  border-top-left-radius: 50vh;
  border-bottom-left-radius: 50vh;
  border-right: 0;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}
.progress .progress-value {
  display: flex;
  border-radius: 50%;
  font-size: 7vh;
  text-align: center;
  line-height: 7vh;
  align-items: center;
  justify-content: center;
  height: 100%;
  width: 100%;
  font-weight: 300;
}
.progress .progress-value span {
  font-size: 4vh;
  text-transform: uppercase;
}

/* This for loop creates the necessary css animation names
Due to the split circle of progress-left and progress right, we must use the animations on each side.
*/
.progress[data-percentage="1"] .progress-right .progress-bar {
  animation: loading-1 0.5s linear forwards;
}
.progress[data-percentage="1"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="2"] .progress-right .progress-bar {
  animation: loading-2 0.5s linear forwards;
}
.progress[data-percentage="2"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="3"] .progress-right .progress-bar {
  animation: loading-3 0.5s linear forwards;
}
.progress[data-percentage="3"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="4"] .progress-right .progress-bar {
  animation: loading-4 0.5s linear forwards;
}
.progress[data-percentage="4"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="5"] .progress-right .progress-bar {
  animation: loading-5 0.5s linear forwards;
}
.progress[data-percentage="5"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="6"] .progress-right .progress-bar {
  animation: loading-6 0.5s linear forwards;
}
.progress[data-percentage="6"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="7"] .progress-right .progress-bar {
  animation: loading-7 0.5s linear forwards;
}
.progress[data-percentage="7"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="8"] .progress-right .progress-bar {
  animation: loading-8 0.5s linear forwards;
}
.progress[data-percentage="8"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="9"] .progress-right .progress-bar {
  animation: loading-9 0.5s linear forwards;
}
.progress[data-percentage="9"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="10"] .progress-right .progress-bar {
  animation: loading-10 0.5s linear forwards;
}
.progress[data-percentage="10"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="11"] .progress-right .progress-bar {
  animation: loading-11 0.5s linear forwards;
}
.progress[data-percentage="11"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="12"] .progress-right .progress-bar {
  animation: loading-12 0.5s linear forwards;
}
.progress[data-percentage="12"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="13"] .progress-right .progress-bar {
  animation: loading-13 0.5s linear forwards;
}
.progress[data-percentage="13"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="14"] .progress-right .progress-bar {
  animation: loading-14 0.5s linear forwards;
}
.progress[data-percentage="14"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="15"] .progress-right .progress-bar {
  animation: loading-15 0.5s linear forwards;
}
.progress[data-percentage="15"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="16"] .progress-right .progress-bar {
  animation: loading-16 0.5s linear forwards;
}
.progress[data-percentage="16"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="17"] .progress-right .progress-bar {
  animation: loading-17 0.5s linear forwards;
}
.progress[data-percentage="17"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="18"] .progress-right .progress-bar {
  animation: loading-18 0.5s linear forwards;
}
.progress[data-percentage="18"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="19"] .progress-right .progress-bar {
  animation: loading-19 0.5s linear forwards;
}
.progress[data-percentage="19"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="20"] .progress-right .progress-bar {
  animation: loading-20 0.5s linear forwards;
}
.progress[data-percentage="20"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="21"] .progress-right .progress-bar {
  animation: loading-21 0.5s linear forwards;
}
.progress[data-percentage="21"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="22"] .progress-right .progress-bar {
  animation: loading-22 0.5s linear forwards;
}
.progress[data-percentage="22"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="23"] .progress-right .progress-bar {
  animation: loading-23 0.5s linear forwards;
}
.progress[data-percentage="23"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="24"] .progress-right .progress-bar {
  animation: loading-24 0.5s linear forwards;
}
.progress[data-percentage="24"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="25"] .progress-right .progress-bar {
  animation: loading-25 0.5s linear forwards;
}
.progress[data-percentage="25"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="26"] .progress-right .progress-bar {
  animation: loading-26 0.5s linear forwards;
}
.progress[data-percentage="26"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="27"] .progress-right .progress-bar {
  animation: loading-27 0.5s linear forwards;
}
.progress[data-percentage="27"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="28"] .progress-right .progress-bar {
  animation: loading-28 0.5s linear forwards;
}
.progress[data-percentage="28"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="29"] .progress-right .progress-bar {
  animation: loading-29 0.5s linear forwards;
}
.progress[data-percentage="29"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="30"] .progress-right .progress-bar {
  animation: loading-30 0.5s linear forwards;
}
.progress[data-percentage="30"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="31"] .progress-right .progress-bar {
  animation: loading-31 0.5s linear forwards;
}
.progress[data-percentage="31"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="32"] .progress-right .progress-bar {
  animation: loading-32 0.5s linear forwards;
}
.progress[data-percentage="32"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="33"] .progress-right .progress-bar {
  animation: loading-33 0.5s linear forwards;
}
.progress[data-percentage="33"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="34"] .progress-right .progress-bar {
  animation: loading-34 0.5s linear forwards;
}
.progress[data-percentage="34"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="35"] .progress-right .progress-bar {
  animation: loading-35 0.5s linear forwards;
}
.progress[data-percentage="35"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="36"] .progress-right .progress-bar {
  animation: loading-36 0.5s linear forwards;
}
.progress[data-percentage="36"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="37"] .progress-right .progress-bar {
  animation: loading-37 0.5s linear forwards;
}
.progress[data-percentage="37"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="38"] .progress-right .progress-bar {
  animation: loading-38 0.5s linear forwards;
}
.progress[data-percentage="38"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="39"] .progress-right .progress-bar {
  animation: loading-39 0.5s linear forwards;
}
.progress[data-percentage="39"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="40"] .progress-right .progress-bar {
  animation: loading-40 0.5s linear forwards;
}
.progress[data-percentage="40"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="41"] .progress-right .progress-bar {
  animation: loading-41 0.5s linear forwards;
}
.progress[data-percentage="41"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="42"] .progress-right .progress-bar {
  animation: loading-42 0.5s linear forwards;
}
.progress[data-percentage="42"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="43"] .progress-right .progress-bar {
  animation: loading-43 0.5s linear forwards;
}
.progress[data-percentage="43"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="44"] .progress-right .progress-bar {
  animation: loading-44 0.5s linear forwards;
}
.progress[data-percentage="44"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="45"] .progress-right .progress-bar {
  animation: loading-45 0.5s linear forwards;
}
.progress[data-percentage="45"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="46"] .progress-right .progress-bar {
  animation: loading-46 0.5s linear forwards;
}
.progress[data-percentage="46"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="47"] .progress-right .progress-bar {
  animation: loading-47 0.5s linear forwards;
}
.progress[data-percentage="47"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="48"] .progress-right .progress-bar {
  animation: loading-48 0.5s linear forwards;
}
.progress[data-percentage="48"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="49"] .progress-right .progress-bar {
  animation: loading-49 0.5s linear forwards;
}
.progress[data-percentage="49"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="50"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="50"] .progress-left .progress-bar {
  animation: 0;
}

.progress[data-percentage="51"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="51"] .progress-left .progress-bar {
  animation: loading-1 0.5s linear forwards 0.5s;
}

.progress[data-percentage="52"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="52"] .progress-left .progress-bar {
  animation: loading-2 0.5s linear forwards 0.5s;
}

.progress[data-percentage="53"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="53"] .progress-left .progress-bar {
  animation: loading-3 0.5s linear forwards 0.5s;
}

.progress[data-percentage="54"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="54"] .progress-left .progress-bar {
  animation: loading-4 0.5s linear forwards 0.5s;
}

.progress[data-percentage="55"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="55"] .progress-left .progress-bar {
  animation: loading-5 0.5s linear forwards 0.5s;
}

.progress[data-percentage="56"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="56"] .progress-left .progress-bar {
  animation: loading-6 0.5s linear forwards 0.5s;
}

.progress[data-percentage="57"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="57"] .progress-left .progress-bar {
  animation: loading-7 0.5s linear forwards 0.5s;
}

.progress[data-percentage="58"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="58"] .progress-left .progress-bar {
  animation: loading-8 0.5s linear forwards 0.5s;
}

.progress[data-percentage="59"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="59"] .progress-left .progress-bar {
  animation: loading-9 0.5s linear forwards 0.5s;
}

.progress[data-percentage="60"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="60"] .progress-left .progress-bar {
  animation: loading-10 0.5s linear forwards 0.5s;
}

.progress[data-percentage="61"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="61"] .progress-left .progress-bar {
  animation: loading-11 0.5s linear forwards 0.5s;
}

.progress[data-percentage="62"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="62"] .progress-left .progress-bar {
  animation: loading-12 0.5s linear forwards 0.5s;
}

.progress[data-percentage="63"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="63"] .progress-left .progress-bar {
  animation: loading-13 0.5s linear forwards 0.5s;
}

.progress[data-percentage="64"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="64"] .progress-left .progress-bar {
  animation: loading-14 0.5s linear forwards 0.5s;
}

.progress[data-percentage="65"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="65"] .progress-left .progress-bar {
  animation: loading-15 0.5s linear forwards 0.5s;
}

.progress[data-percentage="66"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="66"] .progress-left .progress-bar {
  animation: loading-16 0.5s linear forwards 0.5s;
}

.progress[data-percentage="67"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="67"] .progress-left .progress-bar {
  animation: loading-17 0.5s linear forwards 0.5s;
}

.progress[data-percentage="68"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="68"] .progress-left .progress-bar {
  animation: loading-18 0.5s linear forwards 0.5s;
}

.progress[data-percentage="69"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="69"] .progress-left .progress-bar {
  animation: loading-19 0.5s linear forwards 0.5s;
}

.progress[data-percentage="70"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="70"] .progress-left .progress-bar {
  animation: loading-20 0.5s linear forwards 0.5s;
}

.progress[data-percentage="71"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="71"] .progress-left .progress-bar {
  animation: loading-21 0.5s linear forwards 0.5s;
}

.progress[data-percentage="72"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="72"] .progress-left .progress-bar {
  animation: loading-22 0.5s linear forwards 0.5s;
}

.progress[data-percentage="73"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="73"] .progress-left .progress-bar {
  animation: loading-23 0.5s linear forwards 0.5s;
}

.progress[data-percentage="74"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="74"] .progress-left .progress-bar {
  animation: loading-24 0.5s linear forwards 0.5s;
}

.progress[data-percentage="75"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="75"] .progress-left .progress-bar {
  animation: loading-25 0.5s linear forwards 0.5s;
}

.progress[data-percentage="76"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="76"] .progress-left .progress-bar {
  animation: loading-26 0.5s linear forwards 0.5s;
}

.progress[data-percentage="77"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="77"] .progress-left .progress-bar {
  animation: loading-27 0.5s linear forwards 0.5s;
}

.progress[data-percentage="78"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="78"] .progress-left .progress-bar {
  animation: loading-28 0.5s linear forwards 0.5s;
}

.progress[data-percentage="79"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="79"] .progress-left .progress-bar {
  animation: loading-29 0.5s linear forwards 0.5s;
}

.progress[data-percentage="80"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="80"] .progress-left .progress-bar {
  animation: loading-30 0.5s linear forwards 0.5s;
}

.progress[data-percentage="81"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="81"] .progress-left .progress-bar {
  animation: loading-31 0.5s linear forwards 0.5s;
}

.progress[data-percentage="82"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="82"] .progress-left .progress-bar {
  animation: loading-32 0.5s linear forwards 0.5s;
}

.progress[data-percentage="83"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="83"] .progress-left .progress-bar {
  animation: loading-33 0.5s linear forwards 0.5s;
}

.progress[data-percentage="84"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="84"] .progress-left .progress-bar {
  animation: loading-34 0.5s linear forwards 0.5s;
}

.progress[data-percentage="85"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="85"] .progress-left .progress-bar {
  animation: loading-35 0.5s linear forwards 0.5s;
}

.progress[data-percentage="86"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="86"] .progress-left .progress-bar {
  animation: loading-36 0.5s linear forwards 0.5s;
}

.progress[data-percentage="87"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="87"] .progress-left .progress-bar {
  animation: loading-37 0.5s linear forwards 0.5s;
}

.progress[data-percentage="88"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="88"] .progress-left .progress-bar {
  animation: loading-38 0.5s linear forwards 0.5s;
}

.progress[data-percentage="89"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="89"] .progress-left .progress-bar {
  animation: loading-39 0.5s linear forwards 0.5s;
}

.progress[data-percentage="90"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="90"] .progress-left .progress-bar {
  animation: loading-40 0.5s linear forwards 0.5s;
}

.progress[data-percentage="91"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="91"] .progress-left .progress-bar {
  animation: loading-41 0.5s linear forwards 0.5s;
}

.progress[data-percentage="92"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="92"] .progress-left .progress-bar {
  animation: loading-42 0.5s linear forwards 0.5s;
}

.progress[data-percentage="93"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="93"] .progress-left .progress-bar {
  animation: loading-43 0.5s linear forwards 0.5s;
}

.progress[data-percentage="94"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="94"] .progress-left .progress-bar {
  animation: loading-44 0.5s linear forwards 0.5s;
}

.progress[data-percentage="95"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="95"] .progress-left .progress-bar {
  animation: loading-45 0.5s linear forwards 0.5s;
}

.progress[data-percentage="96"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="96"] .progress-left .progress-bar {
  animation: loading-46 0.5s linear forwards 0.5s;
}

.progress[data-percentage="97"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="97"] .progress-left .progress-bar {
  animation: loading-47 0.5s linear forwards 0.5s;
}

.progress[data-percentage="98"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="98"] .progress-left .progress-bar {
  animation: loading-48 0.5s linear forwards 0.5s;
}

.progress[data-percentage="99"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="99"] .progress-left .progress-bar {
  animation: loading-49 0.5s linear forwards 0.5s;
}

.progress[data-percentage="100"] .progress-right .progress-bar {
  animation: loading-50 0.5s linear forwards;
}
.progress[data-percentage="100"] .progress-left .progress-bar {
  animation: loading-50 0.5s linear forwards 0.5s;
}

@keyframes loading-1 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(3.6);
    transform: rotate(3.6deg);
  }
}
@keyframes loading-2 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(7.2);
    transform: rotate(7.2deg);
  }
}
@keyframes loading-3 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(10.8);
    transform: rotate(10.8deg);
  }
}
@keyframes loading-4 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(14.4);
    transform: rotate(14.4deg);
  }
}
@keyframes loading-5 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(18);
    transform: rotate(18deg);
  }
}
@keyframes loading-6 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(21.6);
    transform: rotate(21.6deg);
  }
}
@keyframes loading-7 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(25.2);
    transform: rotate(25.2deg);
  }
}
@keyframes loading-8 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(28.8);
    transform: rotate(28.8deg);
  }
}
@keyframes loading-9 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(32.4);
    transform: rotate(32.4deg);
  }
}
@keyframes loading-10 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(36);
    transform: rotate(36deg);
  }
}
@keyframes loading-11 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(39.6);
    transform: rotate(39.6deg);
  }
}
@keyframes loading-12 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(43.2);
    transform: rotate(43.2deg);
  }
}
@keyframes loading-13 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(46.8);
    transform: rotate(46.8deg);
  }
}
@keyframes loading-14 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(50.4);
    transform: rotate(50.4deg);
  }
}
@keyframes loading-15 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(54);
    transform: rotate(54deg);
  }
}
@keyframes loading-16 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(57.6);
    transform: rotate(57.6deg);
  }
}
@keyframes loading-17 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(61.2);
    transform: rotate(61.2deg);
  }
}
@keyframes loading-18 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(64.8);
    transform: rotate(64.8deg);
  }
}
@keyframes loading-19 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(68.4);
    transform: rotate(68.4deg);
  }
}
@keyframes loading-20 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(72);
    transform: rotate(72deg);
  }
}
@keyframes loading-21 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(75.6);
    transform: rotate(75.6deg);
  }
}
@keyframes loading-22 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(79.2);
    transform: rotate(79.2deg);
  }
}
@keyframes loading-23 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(82.8);
    transform: rotate(82.8deg);
  }
}
@keyframes loading-24 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(86.4);
    transform: rotate(86.4deg);
  }
}
@keyframes loading-25 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(90);
    transform: rotate(90deg);
  }
}
@keyframes loading-26 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(93.6);
    transform: rotate(93.6deg);
  }
}
@keyframes loading-27 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(97.2);
    transform: rotate(97.2deg);
  }
}
@keyframes loading-28 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(100.8);
    transform: rotate(100.8deg);
  }
}
@keyframes loading-29 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(104.4);
    transform: rotate(104.4deg);
  }
}
@keyframes loading-30 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(108);
    transform: rotate(108deg);
  }
}
@keyframes loading-31 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(111.6);
    transform: rotate(111.6deg);
  }
}
@keyframes loading-32 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(115.2);
    transform: rotate(115.2deg);
  }
}
@keyframes loading-33 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(118.8);
    transform: rotate(118.8deg);
  }
}
@keyframes loading-34 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(122.4);
    transform: rotate(122.4deg);
  }
}
@keyframes loading-35 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(126);
    transform: rotate(126deg);
  }
}
@keyframes loading-36 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(129.6);
    transform: rotate(129.6deg);
  }
}
@keyframes loading-37 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(133.2);
    transform: rotate(133.2deg);
  }
}
@keyframes loading-38 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(136.8);
    transform: rotate(136.8deg);
  }
}
@keyframes loading-39 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(140.4);
    transform: rotate(140.4deg);
  }
}
@keyframes loading-40 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(144);
    transform: rotate(144deg);
  }
}
@keyframes loading-41 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(147.6);
    transform: rotate(147.6deg);
  }
}
@keyframes loading-42 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(151.2);
    transform: rotate(151.2deg);
  }
}
@keyframes loading-43 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(154.8);
    transform: rotate(154.8deg);
  }
}
@keyframes loading-44 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(158.4);
    transform: rotate(158.4deg);
  }
}
@keyframes loading-45 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(162);
    transform: rotate(162deg);
  }
}
@keyframes loading-46 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(165.6);
    transform: rotate(165.6deg);
  }
}
@keyframes loading-47 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(169.2);
    transform: rotate(169.2deg);
  }
}
@keyframes loading-48 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(172.8);
    transform: rotate(172.8deg);
  }
}
@keyframes loading-49 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(176.4);
    transform: rotate(176.4deg);
  }
}
@keyframes loading-50 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(180);
    transform: rotate(180deg);
  }
}

  .fa-grin-beam-sweat {
          margin-right: 2vh;
          transition: 0.3s ease;
          font-size: 130%;
      }

      .main .content .again:hover .fa-grin-beam-sweat {
          display: inline;
          margin-right: 2vh;
          left: 32%;
      }

      .main .content .again {
        font-size: 90%;
        position: absolute;
        top: 100%;
        left: 20%;
        margin-top: 3vh;
        margin-bottom: 20%;
        text-align: center;
        padding-left: 5%;
        padding-right: 5%;
        padding-top: 2%;
        padding-bottom: 2%;
        border: 1px solid rgb(78, 175, 255);
        background: rgb(78, 175, 255);
        color: white;
        transition: 0.4s ease;
      }

      .main .content .again:hover {
        background: white;
        color: rgb(78, 175, 255);
      }

      .fa-clipboard-list {
          margin-right: 2vh;
          transition: 0.3s ease;
          font-size: 130%;
      }

      .main .content .course:hover .fa-clipboard-list {
          display: inline;
          margin-right: 2vh;
          left: 32%;
      }

      .main .content .course {
        font-size: 90%;
        position: absolute;
        top: 100%;
        left: 45%;
        margin-top: 3vh;
        margin-bottom: 20%;
        text-align: center;
        padding-left: 5%;
        padding-right: 5%;
        padding-top: 2%;
        padding-bottom: 2%;
        border: 1px solid rgb(78, 175, 255);
        background: rgb(78, 175, 255);
        color: white;
        transition: 0.4s ease;
      }

      .main .content .course:hover {
        background: white;
        color: rgb(78, 175, 255);
      }

      @media only screen and (min-width: 1850px) {
        .sidebar {
            width: 23%;
        }

        .bottombar {
            display: none;
        }

        .main .content {
          position: fixed;
          left: 35%;
          right: 10%;
          top: 5%;
        }
      }

      @media only screen and (max-width: 1849px) {
        .sidebar {
            width: 20%;
        }

        .sidebar a {
            position: relative;
            top: 35%;
            font-size: 4vh;
        }

        .sidebar .logo {
            top: 7%;
        }

        .sidebar .image {
            width: 60%;
        }

        .sidebar .fas {
            font-size: 5vh;
        }

        .sidebar .fab {
            font-size: 5vh;
        }

        .bottombar {
            display: none;
        }

        .bottombar {
            display: none;
        }
      }
    </style>

        <div class="main col">
            <div class="content">
                <div class="col-md-6 col-xl-8">
                    <div class="progress" data-percentage="{{ $score }}">
                        <span class="progress-left">
                            <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                            <div>
                                <span>Your Score</span><br>
                                {{ $score }}%
                            </div>
                        </div>
                    </div>

                    <a name="" id="" class="again create btn btn-primary"
                    href="{{ url()->previous() }}"
                    role="button"><i class="far fa-grin-beam-sweat"></i>Try Again</a>

                    <a name="" id="" class="course create btn btn-primary"
                    href="{{ route('courses.quiz') }}"
                    role="button"><i class="fas fa-clipboard-list"></i>Go to Quizzes</a>
                </div>
            </div>
        </div>
@endsection