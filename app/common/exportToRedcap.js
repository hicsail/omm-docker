const api_url = "https://redcap.bumc.bu.edu";
const main_proj_key = "9C6F69449FDB8C9CB43C3990BF508227";

const body_raw = {
  token: main_proj_key,
  content: "record",
  format: "json",
  data: { record_id: 123, complete: 1 },
};

const body = JSON.stringify(body_raw);

const exportData = async () => {
  console.log("exporting data to redcap...exec");

  const response = await fetch(`${api_url}/api/`, {
    method: "POST",
    // headers: {
    //   "Content-Type": "application/x-www-form-urlencoded",
    //   "Content-Length": body.length.toString(),
    // },
    body: JSON.stringify(body),
    // mode: "no-cors",
  });
  console.log("response", response);

  const data = await response.json();
  console.log(data);
  return data;
};

exportData();
