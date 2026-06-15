<style>
  .announcement-block {
    padding: 3rem 2rem;
    text-align: center;
    background: #ffffff;
  }
  .ann-ornament {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    margin-bottom: 2rem;
  }
  .ann-ornament-line {
    width: 90px;
    height: 1px;
    background: linear-gradient(90deg, transparent, #9a1430);
  }
  .ann-ornament-line.rev {
    background: linear-gradient(270deg, transparent, #9a1430);
  }
  .ann-ornament-diamond {
    width: 10px;
    height: 10px;
    background: #9a1430;
    transform: rotate(45deg);
  }
  .ann-ornament-dot {
    width: 5px;
    height: 5px;
    background: #b8973e;
    border-radius: 50%;
  }
  .ann-pre-label {
    font-family: 'Cormorant Garamond', Georgia, serif;
    font-size: 1.1rem;
    letter-spacing: 0.22em;
    text-transform: uppercase;
    color: #9a1430;
    margin-bottom: 1.4rem;
  }
  .ann-descriptor {
    font-family: 'IM Fell English', Georgia, serif;
    font-size: 1.25rem;
    color: #2a2a2a;
    margin-bottom: 0.4rem;
  }
  .ann-name {
    font-family: 'IM Fell English', Georgia, serif;
    font-size: 2.4rem;
    font-style: italic;
    color: #9a1430;
    line-height: 1.2;
    margin-bottom: 1.2rem;
  }
  .ann-dates {
    font-family: 'Cormorant Garamond', Georgia, serif;
    font-size: 1.3rem;
    letter-spacing: 0.1em;
    color: #222;
    margin-bottom: 2rem;
  }
  .ann-divider {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    margin-bottom: 2rem;
  }
  .ann-divider-rule {
    width: 130px;
    height: 1px;
    background: #b8973e;
    opacity: 0.7;
  }
  .ann-divider-motif {
    color: #b8973e;
    font-size: 1.3rem;
  }
  .ann-punya {
    font-family: 'Cormorant Garamond', Georgia, serif;
    font-size: 0.95rem;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: #777777;
    margin-bottom: 0.5rem;
  }
  .ann-tithi-number {
    font-family: 'IM Fell English', Georgia, serif;
    font-size: 1.9rem;
    color: #b8973e;
    line-height: 1.3;
    margin-bottom: 0.3rem;
  }
  .ann-tithi-label {
    font-family: 'IM Fell English', Georgia, serif;
    font-size: 1.25rem;
    font-style: italic;
    color: #2a2a2a;
  }

  @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap');

  .car-wrap { padding: 2rem 0; background: #ffffff; }

  .car-header { text-align: center; margin-bottom: 1.8rem; padding: 0 1rem; }
  .car-header-label { font-family: 'Cormorant Garamond', Georgia, serif; font-weight: bold; font-size: 0.82rem; letter-spacing: 0.22em; text-transform: uppercase; color: #9a1430; margin-bottom: 6px; }
  .car-header-title { font-family: 'Cormorant Garamond', Georgia, serif; font-size: 1.65rem; font-weight: 600; color: #1a0a0e; line-height: 1.3; }
  .car-header-rule { display: flex; align-items: center; justify-content: center; gap: 10px; margin-top: 12px; }
  .car-header-rule-line { width: 60px; height: 1px; background: #9a1430; }
  .car-header-rule-diamond { width: 7px; height: 7px; background: #9a1430; transform: rotate(45deg); }

  .car-viewport { overflow: hidden; }
  .car-track { display: flex; transition: transform 0.55s cubic-bezier(0.4,0,0.2,1); will-change: transform; }
  .car-slide { min-width: 100%; padding: 0 1.2rem; box-sizing: border-box; }

  .car-card {
    background: #fdf6ee;
    border-radius: 12px;
    padding: 2.2rem 2.2rem 1.8rem;
    min-height: 220px;
    display: flex;
    flex-direction: column;
    border: 1px solid #e8d5b7;
    border-top: 4px solid #9a1430;
  }

  .car-quote-mark { font-family: 'Cormorant Garamond', Georgia, serif; font-size: 5rem; color: #9a1430; line-height: 0.5; margin-bottom: 1.2rem; opacity: 0.5; }
  .car-quote { font-family: 'Cormorant Garamond', Georgia, serif; font-size: 1.22rem; font-style: italic; line-height: 1.85; color: #2a1208; margin-bottom: 1.6rem; flex: 1; }
  .car-divider { width: 40px; height: 1px; background: #b8973e; margin-bottom: 1.2rem; }

  .car-attribution { display: flex; align-items: center; gap: 14px; margin-top: auto; }
  .car-avatar { width: 44px; height: 44px; border-radius: 50%; background: #9a1430; border: 1.5px solid #b8973e; display: flex; align-items: center; justify-content: center; font-family: 'Cormorant Garamond', Georgia, serif; font-size: 13px; font-weight: 600; color: #fdf6ee; flex-shrink: 0; }
  .car-name { font-family: 'Cormorant Garamond', Georgia, serif; font-size: 1.08rem; font-weight: 600; color: #1a0a0e; margin-bottom: 2px; }
  .car-role { font-family: 'Cormorant Garamond', Georgia, serif; font-size: 0.85rem; color: #9a6020; font-style: italic; }

  .car-controls { display: flex; align-items: center; justify-content: center; gap: 18px; margin-top: 1.6rem; }

  .car-btn {
    width: 40px; height: 40px;
    border: 1.5px solid #9a1430;
    border-radius: 50%;
    background: #fff;
    cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    color: #9a1430;
    font-size: 18px;
    line-height: 1;
    transition: background 0.2s, color 0.2s;
    user-select: none;
    -webkit-user-select: none;
  }
  .car-btn:hover { background: #9a1430; color: #fff; }

  .car-dots { display: flex; gap: 7px; align-items: center; }
  .car-dot { width: 7px; height: 7px; border-radius: 50%; background: #dbc9b0; cursor: pointer; transition: background 0.2s, transform 0.2s; }
  .car-dot.active { background: #9a1430; transform: scale(1.3); }

  .car-counter { font-family: 'Cormorant Garamond', Georgia, serif; font-size: 0.85rem; color: #999; text-align: center; margin-top: 8px; letter-spacing: 0.08em; }


  /* === VARIANT B: Centered, minimal rules === */
  .var-b {
    text-align: center;
    padding: 1.2rem 1rem;
    background: #fff;
    /*border-top: 1px solid #9a1430;*/
    border-bottom: 1px solid #9a1430;
  }
  .var-b .pre {
    font-family: 'Cormorant Garamond', Georgia, serif;
    font-size: 0.9rem;
    font-weight: 700;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: #9a1430;
    margin-bottom: 6px;
  }
  .var-b .name {
    font-family: 'Cormorant Garamond', Georgia, serif;
    font-size: 1.85rem;
    font-style: italic;
    font-weight: 700;
    color: #1a1a1a;
    line-height: 1.2;
  }
  .var-b .dates {
    font-family: 'Cormorant Garamond', Georgia, serif;
    font-size: 1rem;
    font-weight: 900;
    color: #666;
    margin-bottom: 8px;
    letter-spacing: 0.04em;
  }
  .var-b .sub {
    font-family: 'Cormorant Garamond', Georgia, serif;
    font-size: 1rem;
    color: #444;
  }
  .var-b .sub em {
    color: #b8973e;
    font-style: italic;
  }

</style>




<div class="container" style="margin-top: 150px;">
	<div class="row">
		<div class="col-md-4">
			<img src="<?=BASE_URL?>public/images/tr_mahalingam.png" class="img-fluid" alt="Book cover page" />

<div class="var-b">
  <p class="pre">Announcing an authorised biography of the legendary flautist</p>
  <p class="name">T. R. Mahalingam</p>
  <p class="dates">6 Nov. 1926, Tiruvidaimarudur &nbsp;&ndash;&nbsp; 31 May 1986, Chennai</p>
  <p class="sub">On his <em>40th Punya Tithi (Remembrance Day)</em></p>
</div>
		</div>	
		<div class="col-md-8">




<div class="book-header text-center my-2" style="max-width: 600px; margin: 0 auto; font-family: 'Georgia', serif;">

    
    <h1 style="font-size: 3.5rem; font-weight: 400; color: #1a1a1a; margin-bottom: 10px; font-style: italic;">
        A Breath of Divinity
    </h1>    

    <hr style="width: 60px; border-top: 2px solid #b38f4f; margin: 10px auto;">
    <p style="color: red;"><strong>INR ₹1500</strong></p>
    
    <h2 style="font-family: 'Helvetica Neue', Arial, sans-serif; font-size: 1.25rem; font-weight: 600; text-transform: uppercase; letter-spacing: 3px; color: #4a4a4a; margin-top: 10px; margin-bottom: 8px; line-height: 1.5;">
        The Life and Music of <span style="color: #b38f4f;">T.R. Mahalingam</span>
    </h2>
    
    <p style="font-family: 'Georgia', serif; font-size: 1rem; font-style: italic; color: #777; letter-spacing: 1px; margin-bottom: 2em;">
        An Authorized Biography
    </p>


<div class="preorder-box" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; background: #ffffff; border: 1px solid #cbd5e1; border-radius: 8px; padding: 12px 16px; max-width: 650px; margin: 15px auto; display: flex; align-items: center; justify-content: space-between; gap: 16px; box-shadow: 0 2px 8px rgba(0,0,0,0.04); box-sizing: border-box;">
  <p><span style="color: #8b263e; margin-right: 6px;">●</span>To be released in <strong style="color: #2d3748;">November 2026</strong>, marking the <strong style="color: #2d3748;">centenary of his birth</strong>. Reserve your copy at a pre-order discounted price of INR <strong style="color: #2d3748;">₹1,250</strong> and <span style="color: #2e6f40; font-weight: 600;">free delivery</span>.</p> 
</div>

<form class="text-center mt-3"><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Sv77ch0UDewFBz" async> </script> </form> 


    
</div>

				

<h3 class="mt-3 mb-1">About Mali and book:</h3>

<p class="lead"><strong>Tiruvidaimarudur Ramaswamy Mahalingam</strong> (6 November 1926 – 31 May 1986) affectionately known as <em>‘Flute Mali’</em>, to millions of his fans, was a child prodigy flautist and a musical genius who revolutionised the style of flute-playing in South Indian classical music. His uncanny talent first came to light when he was only five. He had his first major public performance when he was seven. His career as a concert artiste started when he was nine and distinguished senior stalwarts of that era lined up to team with the ‘wonder boy’. His concerts were full of surprises when he gave the most unexpected shades to existing ragas and indulged in intricate rhythmic pattems with incredible ease. The tonal purity and melodic sweetness of his raga expositions were breathtaking and a pioneering work for his time. A hectic performance schedule spanning five decades made him the first global superstar instrumentalist in the Carnatic world. Off-stage, a shy and self-effacing person with the mind of a philosopher and a heart of a philanthropist, Mali remained a mystic to everyone he interacted with. His art continues to inspire generations of musicians. This is the first authorized and detailed biography of <em>Flute Mali</em>, a humble tribute on his birth centenary year.</p>

<h3 class="mt-5 mb-1">About the author:</h3> 

<p class="lead"><strong>Veejay Sai</strong> is an award-winning writer, editor, translator, biographer and a culture critic. He has written and published extensively on Indian classical music, classical dance, theatre, Indic studies, food, and travel for the last two decades. He is a senior columnist with many newspapers and magazines. He loves documenting the cultural history of India through the lens of performing arts and tradition. He has held editorial designations in several prestigious newspapers and magazines over the past two decades.</p>

<p class="lead mt-3">He is the author of <strong>‘Drama Queens : Women Who Created History On Stage’</strong>, <em>(Roli Books, 2017)</em> and <strong>‘The Many Lives of Mangalampalli Balamuralikrishna’</strong> <em>(Penguin Random House 2022)</em>. He has served on the <em>jury of the National Film Awards</em> for the <em>Ministry of Information and Broadcasting</em>, Government of India. He is currently working on several Cultural history research projects. He lives in New Delhi. He may be contacted at - <a href="mailto:mangalam.bhavatu@gmail.com">mangalam.bhavatu@gmail.com</a></p>


		</div>	
	</div> 
</div>

