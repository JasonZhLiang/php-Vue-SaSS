// class TaskList extends  React.Component{
//     render(){
//         return <div></div>
//     }
// }
// export default TaskList;
// or you can use es6 class way as above to do same as follow;

var TaskList = React.createClass({

    render:function(){
        // var displayTask = function (task){
        //     return<li>{task}</li>
        // };

        var displayTask = (tas) => <li>{tas}</li>;//this is arrow syntax of function which is identical with the one above

        return(
            <ul>
                {this.props.tasks.map(displayTask)}
            </ul>
        );
    }

});
