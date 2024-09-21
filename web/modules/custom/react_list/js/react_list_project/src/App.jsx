import React, { useEffect, useState } from "react";

const App = () => {
const [nodes, setNodes] = useState([]);
useEffect(() => {
fetch("/jsonapi/node/article")
.then((response) => response.json())
.then((data) => setNodes(data.data));
}, []);

return (

<div>
<h1>Article List</h1>
<ul>
{nodes.map((node) => (
    <>
<li key={node.id}>{node.attributes.title}</li>
<li key={node.id}>{node.attributes.created}</li>
<li key={node.id}>{node.attributes.body.value}</li>
</>
))}
</ul>
</div>

);
};

export default App;
