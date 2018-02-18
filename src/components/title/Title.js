require('normalize.css/normalize.css');
require('./title.less');

import React from 'react';

class Title extends React.Component {
  render() {
    return (
      <div>
        <h1 className="center">Phaser大会</h1>
        <h2 className="center">参赛请联系QQ:396417401</h2>
      </div>
    );
  }
}

export default Title;
