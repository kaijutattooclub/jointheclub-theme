/* eslint-disable */
module.exports = {
  plugins: [
    require("postcss-prepend-plugin")({
      message: `
      Theme Name: Join The Club
      Theme URI: https://kaijutattoo.dk
      Author: raske.xyz
      Author URI: https://raske.xyz
      Description: Pretty fly, for a doom guy
      Version: 1.1.17
      `,
    }),
    require("tailwindcss"),
    require("autoprefixer"),
  ],
};
