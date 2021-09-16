import React, { useState } from "react";
import "./styles.css";

import reflections from "./assets/blue-reflections.jpg";
import flowers from "./assets/flower-boy.jpg";
import graff from "./assets/graph-abstract.jpeg";
import harry from "./assets/mtn-harry.jpg";
import neon from "./assets/neon.jpeg";
import chris from "./assets/smoky-chris.jpg";
import surrey from "./assets/surrey-sunset.jpeg";
import walk2work from "./assets/walk-to-work.jpg";
import eagle from "./assets/whis-eagle.jpg";
import crows from "./assets/yall-got-black-crows.jpg";
import { ReactComponent as BackArrow } from "./assets/arrow-left.svg";
import { ReactComponent as NextArrow } from "./assets/arrow-right.svg";

const images = [
  reflections,
  flowers,
  graff,
  harry,
  neon,
  chris,
  surrey,
  walk2work,
  eagle,
  crows
];

const Loading = ({ calculatedWidth }) => (
  <aside>
    <div className="loading-bar">
      <label htmlFor="images-loaded">
        Loading all your favourite images...
      </label>
      <progress id="images-loaded" max="100" value={calculatedWidth}></progress>
    </div>
  </aside>
);

const App = () => {
  const [currentImage, setCurrentImage] = useState(0);
  const [numLoaded, setNumLoaded] = useState(0);

  const handleClickPrev = () => {
    const length = images.length - 1;

    setCurrentImage(() => {
      return currentImage > 0 ? currentImage - 1 : length;
    });
  };

  const handleClickNext = () => {
    const length = images.length - 1;

    setCurrentImage(() => {
      return currentImage < length ? currentImage + 1 : 0;
    });
  };

  const handleImageLoad = () => {
    setNumLoaded((numLoaded) => numLoaded + 1);
  };

  return (
    <section>
      <header>
        <h1>Zesty</h1>
        <h2>
          A photography project
          <br />
          by Liam Kenny
        </h2>
      </header>

      <figure className="image-container">
        {numLoaded < images.length ? (
          <Loading calculatedWidth={(numLoaded / images.length) * 100} />
        ) : null}

        <nav>
          <BackArrow onClick={handleClickPrev} />
          <NextArrow onClick={handleClickNext} />
        </nav>

        {images.map((imageURL, index) => (
          <img
            alt=""
            key={imageURL}
            src={imageURL}
            onLoad={handleImageLoad}
            className={currentImage === index ? "display" : "hide"}
          />
        ))}

        <figcaption>
          {currentImage + 1} / {images.length}
        </figcaption>
      </figure>
    </section>
  );
};

export default App;
