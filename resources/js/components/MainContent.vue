<template>
  <a
    href="https://github.com/jamiemccarville/Laravel-and-Vue.js-photography-blog"
    class="github-corner"
    aria-label="View source on GitHub"
  >
    <svg
      width="80"
      height="80"
      viewBox="0 0 250 250"
      style="fill:#151513; color:#fff; position: absolute; top: 0; border: 0; right: 0;"
      aria-hidden="true"
    >
      <path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z" />
      <path
        d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2"
        fill="currentColor"
        style="transform-origin: 130px 106px;"
        class="octo-arm"
      />
      <path
        d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z"
        fill="currentColor"
        class="octo-body"
      />
    </svg>
  </a>
  <style>
  .github-corner:hover .octo-arm {
    animation: octocat-wave 560ms ease-in-out;
  }
  @keyframes octocat-wave {
    0%,
    100% {
      transform: rotate(0);
    }
    20%,
    60% {
      transform: rotate(-25deg);
    }
    40%,
    80% {
      transform: rotate(10deg);
    }
  }
  @media (max-width: 500px) {
    .github-corner:hover .octo-arm {
      animation: none;
    }
    .github-corner .octo-arm {
      animation: octocat-wave 560ms ease-in-out;
    }
  }
  </style>
  <div class="post">
    <h1 class="post__heading">10 Best Photo Apps For Incredible iPhone Photography (2020 Edition)</h1>

    <img src="/images/pagedivider.svg" alt="page divider" class="post__divider" />
    <p class="post__p">
      How do you capture more interesting travel photos with your iPhone? How do
      you avoid taking the same cliché vacation photos that everyone else takes?
      I recently interviewed Steffen Geldner – a talented iPhone photographer
      with a passion for travel. In this article, Steffen reveals 7 tips for
      shooting beautiful travel photos that will preserve the amazing memories
      of your trip. Read on to discover how to take better travel photos with
      your iPhone!
    </p>
    <img
      class="post__img"
      src="/images/plane-375.jpg"
      srcset="/images/plane-375.jpg 375w, /images/plane-560.jpg 560w, /images/plane-750.jpg 750w, /images/plane-1120.jpg 1120w, /images/plane-1680.jpg 1680w"
    />
    <h2
      class="post__heading post__heading--h2"
    >1. Research Your Destination To Find The Best Photo Opportunities</h2>
    <section class="post__section">
      <p class="post__p post__p--marginb">
        Before your trip, I recommend researching the destination to find the
        most interesting photo opportunities.
      </p>
      <p class="post__p post__p--marginb">
        I always research the location I’m traveling to. I do this extensively
        and
        <br class="post__p--break" />obsessively!
      </p>
      <p class="post__p post__p--marginb">
        It’s up to you how much research you do. But you should definitely spend
        a bit of time looking up some great places to take pictures
      </p>
      <p class="post__p post__p--marginb">So, what kind of research can you do?</p>
      <p class="post__p post__p--marginb">
        First, you could search for photos that other people have taken at the
        locations you’re planning to visit.
      </p>
      <p class="post__p post__p--marginb">
        Search on Instagram or Google to get an idea of the kinds of photos
        people take there.
      </p>
    </section>
    <h2
      class="post__heading post__heading--h2 post__heading--h2--2"
    >2. Capture Your Journey To Tell The Complete Story Of Your Travels</h2>
    <section class="post__section">
      <p
        class="post__p post__p--marginb"
      >Travel photography isn’t just about photographing the destination.</p>
      <p class="post__p post__p--marginb">
        For a more complete photographic story, capture your journey to and from
        the location you’re visiting.
      </p>
      <p class="post__p post__p--marginb">
        If you’re traveling by plane, try to get a window seat where you have a
        view of
        <br class="post__p--break" />the wing or propeller.
      </p>
      <p class="post__p post__p--marginb">
        And of course, you could capture a beautiful aerial view of clouds,
        mountains, or city lights as you’re flying above.
      </p>
      <p class="post__p post__p--marginb">
        Your journey will often involve several different types of transport.
        And they all offer great photo opportunities.
      </p>
      <p class="post__p post__p--marginb">
        Whether you’re traveling by car, taxi, bus, train, boat, or plane, try
        to capture
        <br class="post__p--break" />some interesting photos.
      </p>
    </section>
  </div>
</template>

<script>
export default {
  computed: {
    photos() {
      return photos;
    }
  }
};
</script>

<style lang="scss" scoped></style>
