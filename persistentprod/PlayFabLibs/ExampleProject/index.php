<!doctype html>
<html>
<head>
    <title>PHP Test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="gui.js"></script>
</head>
<body>
    <p>
        <p>TitleId: <input type="text" name="TitleId" id="TitleId" />6A8ED</p>
        <p>ClientSessionToken: <input type="password" name="ClientSessionToken" id="ClientSessionToken" /> (automatically saved after login)</p>
        <p>DevSecretKey: <input type="password" name="DevSecretKey" id="DevSecretKey" />8R6WWBTPNQZSRG3RIJUBDMC83O56ECNYZ6F5BE6FEU9BRCNF1C</p>
        <hr />
    </p>
    <p>
        <p>
            <select name="PlayFabApi" id="PlayFabApi" onChange="OnChangeApi()">
                <option value="Client">Client</option>
                <option value="Server">Server</option>
                <option value="Matchmaker">Matchmaker</option>
                <option value="Admin">Admin</option>
            </select>
            <select name="ApiMethod" id="ApiMethod">
                <option value="LoginWithCustomID">LoginWithCustomID</option>
            </select>
            <input type="submit" value="Send" onclick="CallApi()" />
        </p>
        <p>JsonRequest:<br /><textarea name="JsonRequest" id="JsonRequest" cols="40" rows="5"></textarea></p>
        <p>JsonResponse:<br /><textarea readonly name="JsonResponse" id="JsonResponse" cols="40" rows="5">(response json will display here)</textarea></p>
    </p>
</body>
</html>
