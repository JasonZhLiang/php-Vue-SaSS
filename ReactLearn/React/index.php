<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<hello id="hello"></hello>
<TaskApp id="ss"></TaskApp>
<div id="dd"></div>

<!--<script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>-->
<!--<script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.13.1/react.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.13.1/JSXTransformer.js"></script>

<script type="text/jsx;harmony=true" src="js/components/TaskList.js"></script>
<script type="text/jsx;harmony=true" src="js/components/TaskApp.js"></script>


<script type="text/jsx">
    var HelloWorld = React.createClass({
        render:function(){
            return <div>Hello World!</div>;
        }
    });

    React.render(<HelloWorld/>, document.getElementById('hello'));
</script>

<script type="text/jsx">
    var Counter = React.createClass({

        getInitialState:function () {
            return {count: 0};
        },

        add:function () {
            this.setState({
                count: this.state.count + 1
            });
        },

        subtract:function () {
            var count = this.state.count - 1;
            if(count < 0){
                count = 0;
            }
            this.setState({count});
        },

        render:function(){
            return (
                    <div>
                        <h1>Counter: {this.state.count}</h1>

                        <button onClick={this.subtract}>Subtract 1</button>
                        <button onClick={this.add}>Add 1</button>
                    </div>
            );
        }
    });
//    React.render(<Counter/>, document.body);
    React.render(<Counter/>, document.getElementById('dd'));
</script>

</body>
</html>

