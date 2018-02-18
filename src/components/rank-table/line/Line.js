require('normalize.css/normalize.css');
require('./line.less');

import React from 'react';

class Line extends React.Component {
  render() {
    console.log(this.props.data)
    return (
      <div className="line">
        <div className="itemTitle">{(this.props.data && this.props.data.game_name) || '游戏名'}</div>
        <div className="itemTitle">{(this.props.data && this.props.data.author) || '作者'}</div>
        <div className="itemTitle">
        {
          (this.props.data && this.props.data.game_url) ?
          <a href={this.props.data.game_url} target="_blank">点击前往</a>
          :
          '游戏地址'
        }
        </div>
        <div className="itemTitle">{(this.props.data && this.props.data.score_full) || '作品完整度'}</div>
        <div className="itemTitle">{(this.props.data && this.props.data.score_title) || '题目关联度'}</div>
        <div className="itemTitle">{(this.props.data && this.props.data.score_audience) || '受众度'}</div>
        <div className="itemTitle">{(this.props.data ? (
          parseInt(this.props.data.score_full) + 
          parseInt(this.props.data.score_title) + 
          parseInt(this.props.data.score_audience)
        ) : '总分')}</div>
      </div>
    );
  }
}

export default Line;
