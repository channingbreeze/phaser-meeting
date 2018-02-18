require('normalize.css/normalize.css');
require('./rank-table.less');

import axios from 'axios';
import React from 'react';
import Line from './line/Line';

class RankTable extends React.Component {

  componentDidMount() {
    axios.get('/php/inter/getAllGames.php')
    .then(res => {
      this.setState({datas: res.data});
      //this.datas = res.data;
    });
  }

  render() {

    var lines = [];
    if(this.state && this.state.datas) {
      this.state.datas.forEach(function(data) {
        lines.push(<Line key={data.id} data={data}></Line>);
      })
    }

    return (
      <div className="table">
        <Line></Line>
        {lines}
      </div>
    );
  }
}

export default RankTable;
