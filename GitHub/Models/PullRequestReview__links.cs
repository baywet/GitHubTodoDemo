using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.GitHub.Models {
    public class PullRequestReview__links : IAdditionalDataHolder, IParsable {
        /// <summary>Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.</summary>
        public IDictionary<string, object> AdditionalData { get; set; }
        /// <summary>The html property</summary>
        public PullRequestReview__links_html Html { get; set; }
        /// <summary>The pull_request property</summary>
        public PullRequestReview__links_pull_request Pull_request { get; set; }
        /// <summary>
        /// Instantiates a new PullRequestReview__links and sets the default values.
        /// </summary>
        public PullRequestReview__links() {
            AdditionalData = new Dictionary<string, object>();
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static PullRequestReview__links CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            return new PullRequestReview__links();
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>> {
                {"html", n => { Html = n.GetObjectValue<PullRequestReview__links_html>(PullRequestReview__links_html.CreateFromDiscriminatorValue); } },
                {"pull_request", n => { Pull_request = n.GetObjectValue<PullRequestReview__links_pull_request>(PullRequestReview__links_pull_request.CreateFromDiscriminatorValue); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            writer.WriteObjectValue<PullRequestReview__links_html>("html", Html);
            writer.WriteObjectValue<PullRequestReview__links_pull_request>("pull_request", Pull_request);
            writer.WriteAdditionalData(AdditionalData);
        }
    }
}