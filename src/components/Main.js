require('normalize.css/normalize.css');
require('styles/App.less');
require('./main.less');

import React from 'react';
import Title from './title/Title';
import RankTable from './rank-table/RankTable';

class AppComponent extends React.Component {
  render() {
    return (
      <div className="container">
        <Title></Title>
        <RankTable></RankTable>
      </div>
    );
  }
}

export default AppComponent;
